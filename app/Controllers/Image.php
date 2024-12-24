<?php

namespace App\Controllers;

use App\Models\AduanModel;
use CodeIgniter\Controller;


class Image extends BaseController
{

    protected $AduanModel;
    protected $PengajuanModel;

    public function __construct()
    {
        $this->AduanModel = new AduanModel();
    }
    public function index()
    {

        helper('form');
        $model = new AduanModel();
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['gambar'] = $model->getGambar();
            echo view('view_list', $data);
        }
    }

    public function show_image()
    {

        $data = [
            'title' => 'Image',
        ];

        echo view('pages/template/header');
        echo view('pages/user/aduan/image', $data);
        echo view('pages/template/footer');
    }

    public function status_layanan()
    {

        $layanan = $this->PengajuanModel->findAll();

        $data = [
            'title' => 'Status Layanan',
            'layanan' => $layanan
        ];

        echo view('pages/template/header');
        echo view('pages/user/aduan/image', $data);
        echo view('pages/template/footer');
    }
    public function proses()
    {
        $model = new AduanModel();
        if ($this->request->getMethod(true) !== 'post') {
            return redirect()->to('upload');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {

            return $this->index();
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/image/');
            $data = array(
                'judul'  => $this->request->getPost('judul'),
                'gambar' => $upload->getName()
            );


            $model->simpan_gambar($data);
            return redirect()->to('./User/show_image')->with('berhasil', 'Data Berhasil di Simpan');
        }
    }
}
