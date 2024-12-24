<?php

namespace App\Controllers;

use App\Models\RoleModel;
use App\Models\UserModel;
use App\Models\AduanModel;
use App\Models\PengajuanModel;
use App\Models\PengajuansModel;
use App\Models\User_loginModel;
use App\Models\HomeModel;
use App\Models\ChartModel;
use App\Models\ProfileModel;
use App\Models\BeritaModel;
use App\Controllers\BaseController;
use Twilio\Rest\Client;
use TCPDF;

class Admin extends BaseController
{
    protected $AduanModel;
    protected $PengajuanModel;
    protected $PengajuansModel;
    protected $User_loginModel;
    protected $HomeModel;
    protected $ChartModel;
    protected $ProfileModel;
    protected $BeritaModel;


    public function __construct()
    {
        $this->AduanModel = new AduanModel();
        $this->PengajuanModel = new PengajuanModel();
        $this->PengajuansModel = new PengajuansModel();
        $this->User_loginModel = new User_loginModel();
        $this->HomeModel = new HomeModel();
        $this->ChartModel = new ChartModel();
        $this->ProfileModel = new ProfileModel();
        $this->BeritaModel = new BeritaModel();
    }

    public function response_laya()
    {


        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $layanan = $this->PengajuansModel->findAll();
        $data = [
            'title' => 'Responses Layanan',
            'layanan' => $layanan,
            'avatarData' => $avatarData,
        ];


        echo view('pages/template/header', $data);
        echo view('pages/admin/pengajuan');
        echo view('pages/template/footer');
    }

    public function dashboard_admin()
    {


        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        // $profil = new ProfileModel();
        // $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        // $profil = $profil->where('id')->first();

        $itemModel = new PengajuansModel();
        $itemCount = $itemModel->countAllResults();

        $countModel = new AduanModel();
        $aduanCount = $countModel->countAllResults();

        $countUser = new User_loginModel();
        $alluserCount = $countUser->countAllResults();

        //counttanggapan
        // Mendapatkan ID pengguna dari sesi

        $pengajuanModel = new PengajuansModel();
        $aduanModel = new AduanModel();

        $pengajuanCount = $pengajuanModel->where('tanggapan IS NOT NULL')->countAllResults();
        $aduan = $aduanModel->where('tanggapan IS NOT NULL')->countAllResults();

        $totalItemCount = $pengajuanCount + $aduan;

        // $layanan = $this->PengajuansModel->findAll();

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $aduan = $this->AduanModel->search($keyword);
        } else {
            $aduan = $this->AduanModel;
        }

        $cari = $this->request->getVar('cari');
        if ($cari) {
            $pengajuan = $this->PengajuansModel->search($cari);
        } else {
            $pengajuan = $this->PengajuansModel;
        }

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $alluser = $this->User_loginModel->search($keyword);
        } else {
            $alluser = $this->User_loginModel;
        }

        $data = [
            'title' => 'dashboard',
            'aduan' => $aduan->paginate(5, 'aduan'),
            'pengajuan' => $pengajuan->paginate(5, 'pengajuan'),
            'pager' => $this->AduanModel->pager,
            'chart' => $this->ChartModel->getGrafik(),
            'alluser' => $alluser->paginate(3, 'alluser'),
            'avatarData' => $avatarData,
            'itemCount' => $itemCount,
            'alluserCount' => $alluserCount,
            'aduanCount' => $aduanCount,
            'totalItemCount' => $totalItemCount,


        ];


        echo view('pages/template/header', $data);
        echo view('pages/dashboard/dashboard_admin');
        echo view('pages/template/footer');
    }


    public function apiData($bulan)
    {
        $count = new AduanModel();
        $count->where('tgl >=', "2020-{$bulan}-01");
        $count->where('tgl <=', "2020-{$bulan}-31");
        $count->orderBy('tgl', 'asc');
        echo json_encode($count->get()->getResult());
    }

    public function show_home()
    {

        $home = $this->HomeModel->findAll();
        // $testimoni = $this->BeritaModel->findAll();

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $cari = $this->request->getVar('cari');
        if ($cari) {
            $berita = $this->BeritaModel->search($cari);
        } else {
            $berita = $this->BeritaModel;
        }

        $data = [
            'title' => 'Edit Home',
            'home' => $home,
            // 'berita' => $berita,
            'berita' => $berita->paginate(5, 'berita'),
            'pager' => $this->BeritaModel->pager,
            'avatarData' => $avatarData,
        ];


        echo view('pages/template/header', $data);
        echo view('pages/admin/home/show_home');
        echo view('pages/template/footer');
    }

    public function delete_berita($id)
    {


        $berita = new BeritaModel();
        $berita->where('id', $id);
        $berita->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(site_url('Admin/show_home'));
    }

    public function chart()
    {
        $model = new AduanModel();
        $data = $model->getChartData(); // Mengambil data dari model

        $chartData = [];
        foreach ($data as $row) {
            $chartData['labels'][] = $row['label']; // Misalnya, field label dari database
            $chartData['values'][] = $row['value']; // Misalnya, field value dari database
        };
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $itemModel = new PengajuanModel();
        $itemCount = $itemModel->countAllResults();

        $countModel = new AduanModel();
        $aduanCount = $countModel->countAllResults();

        $data = [
            'title' => 'Responses Layanan',
            'avatarData' => $avatarData,
            'itemCount' => $itemCount,
            'aduanCount' => $aduanCount,
            'chartData' => json_encode($chartData),

        ];

        echo view('pages/template/header', $data);
        echo view('pages/dashboard/dashboard_admin');
        echo view('pages/template/footer');
    }
    public function profile()
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $layanan = new ProfileModel();
        $edit = $layanan->getData($userId);

        $data = [
            'title' => 'Profile',
            'avatarData' => $avatarData,
            'edit' => $edit,

        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/profile/user');
        echo view('pages/template/footer');
    }



    public function register()
    {

        $layanan = $this->PengajuanModel->findAll();


        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();
        $data = [
            'title' => 'Register',
            'layanan' => $layanan,
            'avatarData' => $avatarData,
        ];


        echo view('pages/template/header', $data);
        echo view('pages/admin/register');
        echo view('pages/template/footer');
    }

    public function upload_file()
    {


        $userModel = new User_loginModel();
        // $roleModel = new RoleModel();

        $data = [
            'username' => $this->request->getVar('username'),
            'email'    => $this->request->getVar('email'),
            'role'    => $this->request->getVar('role'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            // 'role_id'    => $this->request->getVar('role_id'),
        ];

        $userModel->insert($data);
        session()->setFlashdata('pesan', 'Data Register Berhasil dibuat, silahkan Login kembali.');
        // Redirect to login page or any other page after successful registration
        return redirect()->to('Admin/regis');
    }

    public function cetak($id)
    {

        $cetak = $this->PengajuansModel->getLayananUser($id);
        $data = [
            'title' => 'Cetak Surat',
            'cetak' => $cetak
        ];

        $view = view('pages/admin/cetak_surat', $data);

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Tambahkan halaman baru
        $pdf->AddPage();

        // Set konten surat di sini
        $konten = "$view";

        // Tambahkan konten ke surat
        $pdf->writeHTML($konten, true, false, true, false, '');
        $this->response->setContentType('application/pdf');
        // Simpan atau tampilkan surat
        $pdf->Output('surat.pdf', 'I');
    }

    public function regis()
    {

        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username Tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email Tidak boleh kosong'
                ]
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis User Tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'PasswordTidak boleh kosong'
                ]
            ],
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi Password Tidak boleh kosong',
                    'matches' => 'Konfirmasi Password tidak sesuai dengan Password'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new User_loginModel();
        $berkas->insert([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'role' => $this->request->getVar('role'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),


        ]);

        session()->setFlashdata('pesan', 'Data User Berhasil dibuat');
        return redirect()->to(base_url('Admin/register'));
    }

    public function response_layana()
    {

        $layanan = $this->PengajuansModel->findAll();

        $data = [
            'title' => 'Responses Layanan',
            'layanan' => $layanan
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/pengajuan');
        echo view('pages/template/footer');
    }
    public function response_layanan()
    {
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $pengajuan = $this->PengajuansModel->search($cari);
        } else {
            $pengajuan = $this->PengajuansModel;
        }

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();
        $data = [
            'title' => 'Responses Layanan',
            'pengajuan' => $pengajuan->paginate(5, 'pengajuan'),
            'pager' => $this->PengajuansModel->pager,
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/pengajuan');
        echo view('pages/template/footer');
    }

    // menampilkan data aduan
    public function aduan()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $aduan = $this->AduanModel->search($keyword);
        } else {
            $aduan = $this->AduanModel;
        }


        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $aduandata = new AduanModel();
        $aduanData = $aduandata->Aduan($userId);

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Aduan',
            'aduan' => $aduan->paginate(5, 'aduan'),
            'pager' => $this->AduanModel->pager,
            'avatarData' => $avatarData,
            'aduanData' => $aduanData,

        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/show_aduan');
        echo view('pages/template/footer');
    }

    public function all_user()
    {

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $alluser = $this->User_loginModel->search($keyword);
        } else {
            $alluser = $this->User_loginModel;
        }


        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'All User',
            'alluser' => $alluser->paginate(5, 'alluser'),
            'pager' => $this->User_loginModel->pager,
            'avatarData' => $avatarData,

        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/all_user');
        echo view('pages/template/footer');
    }

    //delete aduan
    public function delete_aduan($id)
    {


        $aduan = new AduanModel();
        $aduan->where('id', $id);
        $aduan->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(site_url('Admin/aduan'));
    }

    // delete layanan
    public function delete_layanan($id)
    {

        $layanan = new PengajuansModel();
        $layanan->where('id', $id);
        $layanan->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(site_url('Admin/response_layanan'));
    }
    // delete register
    public function delete_register($id)
    {


        $layanan = new User_loginModel();
        $layanan->where('id', $id);
        $layanan->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(site_url('Admin/all_user'));
    }

    // Edit Aduan, mengambil parametr id
    public function edit_aduan($id)
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Edit Aduan',
            'validation' => \Config\Services::validation(),
            'aduan' => $this->AduanModel->getAduan($id),
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/edit_aduan');
        echo view('pages/template/footer');
    }
    public function edit_home($id)
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Edit Home',
            'validation' => \Config\Services::validation(),
            'home' => $this->HomeModel->getHome($id),
            'testimoni' => $this->BeritaModel->getTestimoni($id),
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin//home/edit_home');
        echo view('pages/template/footer');
    }


    public function edit_berita($id)
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Edit Home',
            'validation' => \Config\Services::validation(),
            'berita' => $this->BeritaModel->getBerita($id),
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin//home/edit_berita');
        echo view('pages/template/footer');
    }


    public function settings_profile()
    {
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Setting User',
            'avatarData' => $avatarData,
        ];


        echo view('pages/template/header', $data);
        echo view('pages/admin/profile/settings_profile');
        echo view('pages/template/footer');
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
            'user_id' => $userId,

        ]);
        $dataBerkas->move('assets/images/profile', $fileName);
        session()->setFlashdata('success', 'Data Profile Berhasil ditambahkan');
        return redirect()->to(base_url('Admin/settings_profile'));
    }

    public function edit_layanan($id)
    {
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Edit Layanan',
            'validation' => \Config\Services::validation(),
            'layanan' => $this->PengajuansModel->getLayananUser($id),
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/edit_layanan');
        echo view('pages/template/footer');
    }

    public function lihat_layanan($id)
    {


        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Lihat Layanan',
            'validation' => \Config\Services::validation(),
            'layanan' => $this->PengajuansModel->getLayananUser($id),
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/lihat_layanan');
        echo view('pages/template/footer');
    }
    public function lihat_aduan($id)
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Lihat Layanan',
            'validation' => \Config\Services::validation(),
            'aduan' => $this->AduanModel->getAduan($id),
            'avatarData' => $avatarData,
        ];
        echo view('pages/template/header', $data);
        echo view('pages/admin/lihat_aduan');
        echo view('pages/template/footer');
    }

    public function lihat_alluser($id)
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Lihat Layanan',
            'validation' => \Config\Services::validation(),
            'alluser' => $this->User_loginModel->getAlluser($id),
            'avatarData' => $avatarData,
        ];
        echo view('pages/template/header', $data);
        echo view('pages/admin/lihat_alluser');
        echo view('pages/template/footer');
    }
    public function edit_register($id)
    {

        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Edit Register',
            'validation' => \Config\Services::validation(),
            'register' => $this->User_loginModel->getRegister($id),
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/edit_register');
        echo view('pages/template/footer');
    }
    public function edit_profile($id)
    {


        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();

        $data = [
            'title' => 'Edit Profile',
            'validation' => \Config\Services::validation(),
            'profile' => $this->ProfileModel->getProfile($id),
            'avatarData' => $avatarData,
        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/profile/edit_profile');
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
        return redirect()->to(base_url('Admin/profile'));
    }
    public function update_aduan($id)
    {
        if (!$this->validate([
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Aduan Tidak boleh kosong'
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
                    'required' => 'Judul Aduan Tidak boleh kosong'
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
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'tanggapan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggapan Status Aduan Tidak boleh kosong'
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
                    ]
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
            'tanggapan' => $this->request->getPost('tanggapan'),
        ]);
        session()->setFlashdata('pesan', 'Data Aduan Berhasil diubah');
        return redirect()->to(base_url('Admin/dashboard'));
    }
    public function update_berita($id)
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Penulis tidak boleh kosong'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong'
                ]
            ],
            'nm_di' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama D.I. tidak boleh kosong'
                ]
            ],
            'kab' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kabupaten tidak boleh kosong'
                ]
            ],
            'prov' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Provinsi tidak boleh kosong'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $berkas = new BeritaModel();
        $dataBerkas = $this->request->getFile('image');
        // Cek apakah ada berkas yang diunggah dan valid
        if ($dataBerkas && $dataBerkas->isValid()) {
            if (!$this->validate(
                [
                    'image' => [
                        'rules' => 'mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]',
                        'errors' => [
                            'mime_in' => 'File Extension Harus Berupa jpg, jpeg, png',
                            'max_size' => 'Ukuran File Maksimal 2 MB'
                        ]
                    ]
                ]

            )) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }
            $fileName = $dataBerkas->getName();
            $dataBerkas->move('assets/images/berita', $fileName);
        } else {
            $currentAduan = $berkas->find($id); // Ambil data aduan yang akan diupdate
            $fileName = $currentAduan['image']; // Gunakan gambar yang sudah ada
        }
        $berkas->update($id, [
            'image' => $fileName,
            'name' => $this->request->getPost('name'),
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'nm_di' => $this->request->getPost('nm_di'),
            'kab' => $this->request->getPost('kab'),
            'prov' => $this->request->getPost('prov'),

        ]);
        session()->setFlashdata('pesan', 'Data Berita Berhasil Diubah');
        return redirect()->to(base_url('Admin/show_home'));
    }


    public function update_layanan($id)
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
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Permohonan Layanan Tidak boleh kosong'
                ]
            ],
            'tanggapan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggapa tidak boleh kosong'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new PengajuansModel();
        $dataBerkas = $this->request->getFile('image');
        $uploadBerkas = $this->request->getFile('berkas');

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
                    ]
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

        // Cek apakah ada berkas yang diunggah dan valid
        if ($uploadBerkas && $uploadBerkas->isValid()) {
            if (!$this->validate(
                [

                    'berkas' => [
                        'rules' => 'mime_in[berkas,application/pdf,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                        'errors' => [
                            'mime_in' => 'File Extension Harus Berupa jpg, jpeg, gif, png, pdf',
                            'max_size' => 'Ukuran File Maksimal 2 MB'
                        ]
                    ],
                ]

            )) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }

            $fileberkas = $uploadBerkas->getName();
            $uploadBerkas->move('assets/images/berkas', $fileberkas);
        } else {
            $currentBerkas = $berkas->find($id); // Ambil data aduan yang akan diupdate
            $fileberkas = $currentBerkas['berkas']; // Gunakan gambar yang sudah ada
        }



        $berkas->update($id, [

            'image' => $fileName,
            'berkas' => $fileberkas,
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
            'status' => $this->request->getPost('status'),
            'tanggapan' => $this->request->getPost('tanggapan'),


        ]);

        session()->setFlashdata('pesan', 'Data Pengajuan Layanan Berhasil diubah');
        return redirect()->to(base_url('Admin/dashboard'));
    }

    public function update_home($id)
    {


        $data = $this->request->getPost();
        $this->HomeModel->update($id, $data);


        session()->setFlashdata('pesan', 'Data Tampilan Home Berhasil diubah.');
        return redirect()->to(site_url('Admin/show_home'))->with('Success', 'Data Berhasil di input');
    }

    // public function update_home($id)
    // {
    //     if (!$this->validate([
    //         'judul' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Jenis Kelaminan Tidak boleh kosong'
    //             ]
    //         ],
    //         'judul1' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Tempat Lahir Tidak boleh kosong'
    //             ]
    //         ],
    //         'judul2' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Tanggal Lahir Tidak boleh kosong'
    //             ]
    //         ],
    //         'faq1' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Nik Tidak boleh kosong'
    //             ]
    //         ],
    //         'faq2' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Alamat Tidak boleh kosong'
    //             ]
    //         ],
    //         'faq3' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Nama Lengkap Tidak boleh kosong'
    //             ]
    //         ]
    //     ])) {
    //         session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->back()->withInput();
    //     }
    //     $session = session();
    //     $userId = $session->get('id'); // Pastikan Anda memanggil session dengan benar
    //     $berkas = new HomeModel();

    //     $berkas->update($id, [
    //         'judul' => $this->request->getPost('judul'),
    //         'judul1' => $this->request->getPost('judul1'),
    //         'judul2' => $this->request->getPost('tjudul2'),
    //         'faq1' => $this->request->getPost('faq1'),
    //         'faq2' => $this->request->getPost('faq2'),
    //         'faq3' => $this->request->getPost('faq3'),
    //         'user_id' => $userId,
    //     ]);

    //     session()->setFlashdata('pesan', 'Data Tampilan Home Berhasil diubah.');
    //     return redirect()->to(base_url('Admin/show_home'));
    // }

    public function update_register($id)
    {

        $data = $this->request->getPost();
        $this->User_loginModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data Register Berhasil diubah.');
        return redirect()->to(site_url('Admin/all_user'))->with('Success', 'Data Berhasil di input');
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
    public function change_pass()
    {
        $avatarModel = new ProfileModel();
        $userId = session()->get('id'); // Ganti dengan cara Anda menyimpan user ID pada sesi
        $avatarData = $avatarModel->where('user_id', $userId)->first();


        $data = [
            'title' => 'Change Password',
            'avatarData' => $avatarData

        ];

        echo view('pages/template/header', $data);
        echo view('pages/admin/change_password');
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

        return redirect()->to('Admin/change_password')->with('success', 'Kata sandi berhasil diubah. Silakan masuk lagi.');
    }
}
