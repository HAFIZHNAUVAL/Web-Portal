<?php

namespace App\Controllers;


use App\Models\TestimonialModel;

class Testimonial extends BaseController
{

    protected $TestimonialModel;

    public function __construct()
    {

        $this->TestimonialModel = new TestimonialModel();
    }

    // public function show_home()
    // {

    //     $home = $this->HomeModel->findAll();

    //     $data = [
    //         'title' => 'Home',
    //         'home' => $home
    //     ];

    //     echo view('pages/template/header');
    //     echo view('pages/admin/home/show_home', $data);
    //     echo view('pages/template/footer');
    // }

    public function create_testimoni()
    {

        if (!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email Tidak boleh kosong'
                ]
            ],
            'testimoni' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pesan Testimonial Tidak boleh kosong'
                ]
            ],
            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada Foto yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $session = session();
        $userId = $session->get('id'); // Pastikan Anda memanggil session dengan benar

        $berkas = new TestimonialModel();
        $dataBerkas = $this->request->getFile('image');
        $fileName = $dataBerkas->getName();
        $berkas->insert([
            'image' => $fileName,
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'testimoni' => $this->request->getPost('testimoni'),
            'user_id' => $userId,

        ]);

        $data = [];
        $dataBerkas->move('assets/images/testimonial', $fileName);
        session()->setFlashdata('pesan', 'Data Testimonial Berhasil dibuat', $data);
        return redirect()->to(base_url('/'));
    }
}
