<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AduanModel;
use App\Models\PengajuanModel;
use App\Controllers\BaseController;
use App\Models\PengajuansModel;
use App\Models\User_loginModel;
use App\Models\ProfileModel;
use App\Models\ChartModel;

class User extends BaseController
{
    protected $AduanModel;
    protected $PengajuanModel;
    protected $PengajuansModel;
    protected $User_loginModel;
    protected $ProfileModel;
    protected $ChartModel;

    public function __construct()
    {
        $this->AduanModel = new AduanModel();
        $this->PengajuanModel = new PengajuanModel();
        $this->PengajuansModel = new PengajuansModel();
        $this->User_loginModel = new User_loginModel();
        $this->ProfileModel = new ProfileModel();
        $this->ChartModel = new ChartModel();
    }

    public function dashboard_user()
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $layanan = new PengajuansModel();
        $layananData = $layanan->dataLayanan($userId);

        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $aduandata = new AduanModel();
        $aduanData = $aduandata->dataAduan($userId);

        //countaduan
        $userid = session()->get('id'); // Ganti dengan ID pengguna yang sesuai
        $countModel = new AduanModel();
        $aduanCount = $countModel->where('user_id', $userid)->countAllResults(); // Menghitung jumlah pengajuan berdasarkan ID pengguna

        //countpengajuan
        $userID = session()->get('id'); // Ganti dengan ID pengguna yang sesuai
        $itemModel = new PengajuansModel();
        $itemCount = $itemModel->where('user_id', $userID)->countAllResults(); // Menghitung jumlah pengajuan berdasarkan ID pengguna

        //counttanggapan
        $userID = session()->get('id'); // Mendapatkan ID pengguna dari sesi

        $pengajuanModel = new PengajuansModel();
        $aduanModel = new AduanModel();

        $pengajuanCount = $pengajuanModel->where('user_id', $userID)->countAllResults();
        $aduanCount = $aduanModel->where('user_id', $userID)->countAllResults();

        $totalItemCount = $pengajuanCount + $aduanCount;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tanggapan = $this->PengajuansModel->cari($keyword);
        } else {
            $tanggapan = $this->PengajuansModel;
        }

        $data = [
            'title' => 'Tanggapan Layanan',
            'tanggapan' => $tanggapan->paginate(2, 'tanggapan'),
            'pager' => $this->PengajuansModel->pager,
            'chart' => $this->ChartModel->getGrafik(),

        ];

        echo view('pages/template/header', $data, []);
        echo view('pages/dashboard/dashboard_user', ['avatarData' => $avatarData, 'itemCount' => $itemCount, 'aduanCount' => $aduanCount, 'layananData' => $layananData, 'aduanData' => $aduanData, 'totalItemCount' => $totalItemCount]);
        echo view('pages/template/footer');
    }


    public function create_aduan()
    {

        $data = [
            'title' => 'Create Aduan',
        ];

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/aduan/create_aduan', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }


    public function settings_profile()
    {
        $data = [
            'title' => 'Setting User',
        ];
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/profile/settings_profile', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile User',
        ];
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $layanan = new ProfileModel();
        $edit = $layanan->getData($userId);

        echo view('pages/template/header', $data);
        echo view('pages/user/profile/user', ['avatarData' => $avatarData, 'edit' => $edit]);
        echo view('pages/template/footer');
    }

    public function pengajuan()
    {
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header');
        echo view('pages/user/pengajuan/sktp', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }

    public function createpengajuan()
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header');
        echo view('pages/user/pengajuan/create_pengajuan', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }

    public function simpan()
    {


        $data = $this->request->getPost();
        $this->PengajuanModel->insert($data);
        session()->setFlashdata('pesan', 'Data Pengajuan KTP Berhasil ditambahkan.');
        return redirect()->to(site_url('User/pengajuan'))->with('Success', 'Data Berhasil di input');
    }

    public function save()
    {

        $data = $this->request->getPost();
        $this->AduanModel->insert($data);
        session()->setFlashdata('pesan', 'Data Aduan Berhasil ditambahkan.');
        return redirect()->to(site_url('User/create_aduan'))->with('Success', 'Data Berhasil di input');
    }



    public function upload_file()
    {

        if (!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap Tidak boleh kosong'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Keluhan Tidak boleh kosong'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik Tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Tidak boleh kosong'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Keluhan Tidak boleh kosong'
                ]
            ],
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Keluhan Tidak boleh kosong'
                ]
            ],

            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
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

        $berkas = new AduanModel();
        $dataBerkas = $this->request->getFile('image');
        $fileName = $dataBerkas->getRandomName();
        $berkas->insert([
            'image' => $fileName,
            'judul' => $this->request->getPost('judul'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nik' => $this->request->getPost('nik'),
            'kategori' => $this->request->getPost('kategori'),
            'body' => $this->request->getPost('body'),
            'user_id' => $userId,

        ]);

        $data = [];
        $dataBerkas->move('assets/images/aduan', $fileName);
        session()->setFlashdata('success', 'Data Aduan Berhasil dibuat', $data);
        return redirect()->to(base_url('User/create_aduan'));
    }

    public function upload_fil()
    {
        $session = session();
        $userId = $session->get('id'); // Pastikan Anda memanggil session dengan benar

        $aduanModel = new AduanModel();

        // Ambil data dari form input (anda bisa gunakan Input Filtering untuk membersihkan input)
        $judul = $this->request->getPost('judul');
        $nama = $this->request->getPost('nama');
        $nik = $this->request->getPost('nik');

        $data = [
            'user_id' => $userId,
            'judul' => $judul,
            'nama' => $nama,
            'nik' => $nik,
        ];

        // Sisipkan data aduan ke basis data
        $aduanModel->insertAduan($data);

        return redirect()->to('User/create_aduan'); // Redirect kembali ke halaman daftar aduan
    }

    public function create_pengajuan()
    {


        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap Tidak boleh kosong'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelaminan Tidak boleh kosong'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir Tidak boleh kosong'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Tidak boleh kosong'
                ]
            ],
            'negara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Negara Tidak boleh kosong'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Agama Tidak boleh kosong'
                ]
            ],
            'status_perkawinan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Perkawinan Tidak boleh kosong'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik Tidak boleh kosong'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan Tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Tidak boleh kosong'
                ]
            ],
            'jenis_pengajuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Pengajuan Tidak boleh kosong'
                ]
            ],

            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
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

        $berkas = new PengajuansModel();
        $dataBerkas = $this->request->getFile('image');
        $fileName = $dataBerkas->getName();
        $berkas->insert([
            'image' => $fileName,
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'negara' => $this->request->getPost('negara'),
            'agama' => $this->request->getPost('agama'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'nik' => $this->request->getPost('nik'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_pengajuan' => $this->request->getPost('jenis_pengajuan'),
            'user_id' => $userId,

        ]);
        $dataBerkas->move('assets/images/pengajuan', $fileName);
        session()->setFlashdata('success', 'Data Pengajuan Layanan Berhasil diupload');
        return redirect()->to(base_url('User/create_pengajuan'));
    }

    public function upload_profile()
    {
        if (!$this->validate([
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelaminan Tidak boleh kosong'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir Tidak boleh kosong'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Tidak boleh kosong'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik Tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Tidak boleh kosong'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap Tidak boleh kosong'
                ]
            ],
            'negara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Negara Tidak boleh kosong'
                ]
            ],
            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
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

        $berkas = new ProfileModel();
        $dataBerkas = $this->request->getFile('image');
        $fileName = $dataBerkas->getName();
        $berkas->insert([
            'image' => $fileName,
            'gender' => $this->request->getPost('gender'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nik' => $this->request->getPost('nik'),
            'alamat' => $this->request->getPost('alamat'),
            'nama' => $this->request->getPost('nama'),
            'negara' => $this->request->getPost('negara'),
            'user_id' => $userId,
        ]);
        $dataBerkas->move('assets/images/profile', $fileName);
        session()->setFlashdata('success', 'Data Profile Berhasil ditambahkan');
        return redirect()->to(base_url('User/settings_profile'));
    }



    public function show_layananuser()
    {



        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $layanan = new PengajuansModel();
        $layananData = $layanan->dataLayanan($userId);

        $data = [
            'title' => 'Responses Layanan',

        ];

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/pengajuan/show_layanan', ['avatarData' => $avatarData, 'layananData' => $layananData]);
        echo view('pages/template/footer');
    }
    // menampilkan data aduan
    public function aduanuser()
    {

        //aduan
        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $aduandata = new AduanModel();
        $aduanData = $aduandata->dataAduan($userId);


        $data = [
            'title' => 'Daftar Aduan',

        ];


        //avatar
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();




        echo view('pages/template/header', $data);
        echo view('pages/user/aduan/show_aduanUser', ['avatarData' => $avatarData, 'aduanData' => $aduanData]);
        echo view('pages/template/footer');
    }

    public function tampil_image()
    {
        $image = new AduanModel();
        $data['image'] = $image->findAll();

        echo view('pages/template/header');
        echo view('pages/user/aduan/tampil_image', $data);
        echo view('pages/template/footer');
    }


    public function show_image()
    {
        $image = new AduanModel();
        $data['image'] = $image->findAll();

        $data = [
            'title' => 'Image',
        ];

        echo view('pages/template/header');
        echo view('pages/user/aduan/image', $data);
        echo view('pages/template/footer');
    }


    public function status_aduan()
    {

        $data = [
            'title' => 'Status Aduan',

        ];

        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $status = new AduanModel();
        $statusData = $status->dataAduan($userId);

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/status/status_aduan', ['avatarData' => $avatarData, 'statusData' => $statusData]);
        echo view('pages/template/footer');
    }

    public function status_layanan()
    {
        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $status = new PengajuansModel();
        $statusLayanan = $status->dataLayanan($userId);
        $data = [
            'title' => 'Status Layanan',

        ];
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/status/status_layanan', ['avatarData' => $avatarData, 'statusLayanan' => $statusLayanan]);
        echo view('pages/template/footer');
    }


    public function riwayataduan()
    {
        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $status = new AduanModel();
        $statusData = $status->dataAduan($userId);
        $data = [
            'title' => 'Riwayat Aduan',

        ];
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/riwayat/riwayat_aduan', ['avatarData' => $avatarData, 'statusData' => $statusData]);
        echo view('pages/template/footer');
    }

    public function riwayatlayanan()
    {
        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $status = new PengajuansModel();
        $statusLayanan = $status->dataLayanan($userId);
        $data = [
            'title' => 'Riwayat Layanan',

        ];
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/riwayat/riwayat_layanan', ['avatarData' => $avatarData, 'statusLayanan' => $statusLayanan]);
        echo view('pages/template/footer');
    }

    public function edit_profile($id)
    {


        $data = [
            'title' => 'Edit Profile',
            'validation' => \Config\Services::validation(),
            'profile' => $this->ProfileModel->getProfile($id)
        ];

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/profile/edit_profile', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }

    public function sunting_profile($id)
    {
        if (!$this->validate([
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelaminan Tidak boleh kosong'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir Tidak boleh kosong'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Tidak boleh kosong'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik Tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Tidak boleh kosong'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap Tidak boleh kosong'
                ]
            ],
            'negara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Negara Tidak boleh kosong'
                ]
            ],
            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
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

        $berkas = new ProfileModel();
        $dataBerkas = $this->request->getFile('image');
        $fileName = $dataBerkas->getName();
        $berkas->update($id, [
            'image' => $fileName,
            'gender' => $this->request->getPost('gender'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nik' => $this->request->getPost('nik'),
            'alamat' => $this->request->getPost('alamat'),
            'nama' => $this->request->getPost('nama'),
            'negara' => $this->request->getPost('negara'),
            'user_id' => $userId,
        ]);
        $dataBerkas->move('assets/images/profile', $fileName);
        session()->setFlashdata('success', 'Data Profile Berhasil ditambahkan');
        return redirect()->to(base_url('User/profile'));
    }

    public function download($id)
    {

        $berkas = new PengajuansModel();
        $data = $berkas->find($id);
        return $this->response->download('assets/images/berkas/' . $data->berkas, null);
    }

    // Edit Aduan, mengambil parametr id
    public function edit_aduanuser($id)
    {

        $data = [
            'title' => 'Edit Aduan',
            'validation' => \Config\Services::validation(),
            'aduan' => $this->AduanModel->getAduan($id)
        ];
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/aduan/edit_aduanUser', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }


    public function edit_layananuser($id)
    {


        $data = [
            'title' => 'Edit Layanan',
            'validation' => \Config\Services::validation(),
            'layanan' => $this->PengajuanModel->getLayanan($id)
        ];

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/pengajuan/edit_layananUser', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }

    public function edit_layanan($id)
    {


        $data = [
            'title' => 'Edit Layanan',
            'validation' => \Config\Services::validation(),
            'layanan' => $this->PengajuansModel->getLayananUser($id)
        ];

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header', $data);
        echo view('pages/user/pengajuan/edit_layanan', ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }


    public function update_aduanuser($id)
    {

        if (!$this->validate([
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Keluhan Tidak boleh kosong'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak boleh kosong'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Keluhan Tidak boleh kosong'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik Tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Tidak boleh kosong'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Keluhan Tidak boleh kosong'
                ]
            ],


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $berkas = new AduanModel();
        $dataBerkas = $this->request->getFile('image');

        // Cek apakah ada berkas yang diunggah dan valid
        if ($dataBerkas && $dataBerkas->isValid()) {
            if (!$this->validate(
                [
                    'image' => [
                        'rules' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
                        'errors' => [
                            'mime_in' => 'File Extension Harus Berupa jpg, jpeg, gif, png',
                            'max_size' => 'Ukuran File Maksimal 2 MB'
                        ]
                    ],

                ]

            )) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }

            $fileName = $dataBerkas->getName();
            $dataBerkas->move('assets/images/aduan', $fileName);
        } else {
            $currentAduan = $berkas->find($id); // Ambil data aduan yang akan diupdate
            $fileName = $currentAduan['image']; // Gunakan gambar yang sudah ada
        }

        $berkas->update($id, [
            'image' => $fileName,
            'judul' => $this->request->getPost('judul'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nik' => $this->request->getPost('nik'),
            'kategori' => $this->request->getPost('kategori'),
            'body' => $this->request->getPost('body'),


        ]);
        session()->setFlashdata('pesan', 'Data Aduan Berhasil diubah');
        return redirect()->to(base_url('User/aduan'));
    }
    public function update_layananuser($id)
    {


        $data = $this->request->getPost();
        $this->PengajuanModel->update($id, $data);


        session()->setFlashdata('pesan', 'Data Layanan SKTP Berhasil diubah.');
        return redirect()->to(site_url('Admin/response_layanan'))->with('Success', 'Data Berhasil di input');
    }

    public function update_layanan($id)
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'negara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'status_perkawinan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'jenis_pengajuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }



        $berkas = new PengajuansModel();
        $dataBerkas = $this->request->getFile('image');

        // Cek apakah ada berkas yang diunggah dan valid
        if ($dataBerkas && $dataBerkas->isValid()) {
            if (!$this->validate(
                [
                    'image' => [
                        'rules' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
                        'errors' => [
                            'mime_in' => 'File Extension Harus Berupa jpg, jpeg, gif, png',
                            'max_size' => 'Ukuran File Maksimal 2 MB'
                        ]
                    ],


                ]

            )) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }

            $fileName = $dataBerkas->getName();
            $dataBerkas->move('assets/images/pengajuan', $fileName);
        } else {
            $currentAduan = $berkas->find($id); // Ambil data aduan yang akan diupdate
            $fileName = $currentAduan['image']; // Gunakan gambar yang sudah ada
        }

        $berkas->update($id, [
            'image' => $fileName,
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'negara' => $this->request->getPost('negara'),
            'agama' => $this->request->getPost('agama'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'nik' => $this->request->getPost('nik'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_pengajuan' => $this->request->getPost('jenis_pengajuan'),


        ]);

        session()->setFlashdata('pesan', 'Data Pengajuan Layanan Berhasil diubah');
        return redirect()->to(base_url('User/show_layanan'));
    }

    public function change_passuser()
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        echo view('pages/template/header');
        echo view('pages/user/profile/change_password',  ['avatarData' => $avatarData]);
        echo view('pages/template/footer');
    }
    public function changePassword()
    {
        $userModel = new User_loginModel();

        $user = $userModel->where('id', session()->get('id'))->first();

        if (!$this->validate([

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Saat Ini Tidak boleh kosong'
                ]
            ],
            'new_password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Baru Tidak boleh kosong'
                ]
            ],
            'confirm_password' => [
                'rules' => 'required|matches[new_password]',
                'errors' => [
                    'required' => 'Konfirmasi Password tidak boleh kosong',
                    'matches' => 'Konfirmasi Password tidak sesuai dengan Password Baru'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        if (!$user) {
            return redirect()->to('/change_password')->with('error', 'User not found');
        }

        // Validate the input
        $validationRules = [
            'password' => 'required',
            'new_password'     => 'required|min_length[8]',
            'confirm_password' => 'required|matches[new_password]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Check if the current password matches the one in the database
        if (!password_verify($this->request->getVar('password'), $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Kata sandi saat ini salah');
        }

        // Hash the new password and update it in the database
        $hashedPassword = password_hash($this->request->getVar('new_password'), PASSWORD_DEFAULT);
        $userModel->update($user['id'], ['password' => $hashedPassword]);

        return redirect()->to('User/change_password')->with('success', 'Kata sandi berhasil diubah. Silakan masuk lagi.');
    }
}
