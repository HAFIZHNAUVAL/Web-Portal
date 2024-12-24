<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\User_loginModel;
use App\Controllers\BaseController;
use App\Models\RoleModel;
use Firebase\JWT\JWT;


class Auth extends BaseController
{
    public function index()
    {
        if (session('id')) {

            return redirect()->to(site_url('Admin/dashboard'));
        }
        return view('auth/login');
    }

    public function regis()
    {
        return view('auth/register');
    }
    public function forget_pass()
    {
        return view('auth/forget_password');
    }
    public function reset_pass()
    {
        return view('auth/reset_password');
    }



    // public function registerr()
    // {


    //     $userModel = new User_loginModel();
    //     // $roleModel = new RoleModel();

    //     $data = [
    //         'username' => $this->request->getVar('username'),
    //         'email'    => $this->request->getVar('email'),
    //         'role'    => $this->request->getVar('role'),
    //         'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
    //         // 'role_id'    => $this->request->getVar('role_id'),
    //     ];

    //     $userModel->insert($data);

    //     // Redirect to login page or any other page after successful registration
    //     return redirect()->to('Auth/index');
    // }

    public function register()
    {

        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong'
                ]
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
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
        //Kode ini mengatur pesan flash data dengan kunci 'success' yang memberi tahu pengguna,
        // bahwa data pengguna telah berhasil dibuat
        session()->setFlashdata('success', 'Data User Berhasil dibuat');
        return redirect()->to(base_url('Auth/index'));
    }


    public function logout()
    {

        $session = session();
        $session->destroy();


        return redirect()->to('/Auth/index')->with('Pesan', 'Selamat Anda Berhasil Logout');
    }

    // public function sendEmail()
    // {
    //     $email = $this->request->getVar('email');

    //     // Check if the email exists in the database
    //     $userModel = new User_loginModel();
    //     $user = $userModel->where('email', $email)->first();

    //     if (!$user) {
    //         // Handle email not found
    //         echo "Email not found";
    //         return;
    //     }

    //     // Generate a unique token
    //     $token = bin2hex(random_bytes(32));

    //     // Save the token to the database for the given email
    //     $db = db_connect();
    //     $db->table('userss')->insert([
    //         'email' => $email,
    //         'token' => $token,
    //     ]);

    //     // Send the reset password link to the user's email (you can use your preferred email library for this)
    //     $resetLink = base_url("Auth/reset/$token");
    //     // Use your email library to send the resetLink to the user's email

    //     // Display a message to the user that the reset link has been sent
    //     echo "Reset link has been sent to your email address";
    // }

    // public function reset($token)
    // {
    //     $db = db_connect();
    //     $resetRow = $db->table('userss')->where('token', $token)->get()->getRow();

    //     if (!$resetRow) {
    //         // Handle invalid or expired token
    //         echo "Invalid or expired token";
    //         return;
    //     }

    //     $data = [
    //         'email' => $resetRow->email,
    //     ];

    //     echo view('Auth/reset_password', $data);
    // }

    public function process_reset()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Update the user's password in the database
        $userModel = new User_loginModel();
        $userModel->where('email', $email)->set(['password' => password_hash($password, PASSWORD_DEFAULT)])->update();

        // Delete the password reset token from the database
        $db = db_connect();
        $db->table('userss')->where('email', $email)->delete();

        // Display a message to the user that the password has been reset
        echo "Password has been reset successfully";
    }

    public function login()
    {
        // memulai session
        $session = session();
        // validasi kolom input
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong' //Validasi untuk memastikan bahwa username tidak boleh kosong
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong' //Validasi untuk memastikan bahwa password tidak boleh kosong
                ]
            ],

        ])) {
            // mengatur pesan kesalahan ke sission tersebut
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // mengambil kata sandi dan username dari form input login
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //Objek ini digunakan untuk berinteraksi dengan database,
        // seperti melakukan operasi pengambilan data atau penyimpanan data.
        $userModel = new User_loginModel();
        //Dengan menggunakan metode where() dan first(), kita dapat
        // mengambil data pengguna berdasarkan username yang diberikan dan menyimpannya dalam variabel $user
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            //kode memeriksa apakah variabel $user memiliki nilai atau tidak. Jika variabel $user memiliki 
            //nilai (artinya query mencari pengguna 
            //dengan nama pengguna yang sesuai berhasil), maka kode akan melanjutkan ke langkah berikutnya.
            if (password_verify($password, $user['password'])) {

                $userData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'email' => $user['email'],
                    'logged_in' => true
                ];
                $data = [];
                session()->set($userData);

                if ($user['role'] === '1') {
                    session()->setFlashdata('success', 'Login Berhasil', $data);
                    return redirect()->to('Admin/dashboard'); //Redirect ke halaman dashboard admin setelah login berhasil

                } elseif ($user['role'] === '0') {
                    session()->setFlashdata('success', 'Login Berhasil', $data);
                    return redirect()->to('User/dashboard'); //Redirect ke halaman dashboard pengguna biasa setelah login berhasil
                }
                // Redirect to dashboard or any other page upon successful login

            } else {
                return redirect()->back()->with('error', 'Password yang diinputkan salah');
                //Redirect kembali ke halaman login dengan pesan kesalahan jika password yang dimasukkan salah
            }
        } else {
            // Redirect kembali ke halaman login dengan pesan kesalahan jika username yang dimasukkan salah
            return redirect()->back()->with('error', 'Username yang diinputkan salah');
        }
    }


    public function forgotPassword()
    {
        // Cek apakah form telah disubmit
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');

            // Lakukan validasi email di sini jika diperlukan

            // Cari pengguna berdasarkan email
            $userModel = new User_loginModel();
            $user = $userModel->where('email', $email)->first();

            if ($user) {
                // Generate reset token
                $resetToken = bin2hex(random_bytes(16));

                // Set token dan waktu kadaluwarsa token pada user
                $userModel->update($user['id'], [
                    'reset_token' => $resetToken,
                    'reset_token_expiration' => time() + 3600 // Token kadaluwarsa dalam 1 jam (3600 detik)
                ]);

                // Kirim email reset password
                $email = \Config\Services::email();
                $email->setTo($email);
                $email->setSubject('Reset Password');
                $email->setMessage("Click the link below to reset your password: " . site_url("reset_pass/$resetToken"));
                $email->send();

                return redirect()->to(site_url('Auth/reset_pass'))->with('success', 'Reset password link has been sent to your email.');
            } else {
                return redirect()->to(site_url('Auth/forget_pass'))->with('error', 'Email anda tidak ditemukan.');
            }
        }

        // Jika method bukan POST, tampilkan halaman forgot password
        return view('Auth/forget_pass');
    }

    public function resetPassword($token = null)
    {
        if (empty($token)) {
            // Jika token kosong, arahkan kembali ke halaman forgot password
            return redirect()->to(site_url('Auth/forget_pass'))->with('error', 'Invalid reset token.');
        }

        // Cari user berdasarkan token
        $userModel = new User_loginModel();
        $user = $userModel->where('reset_token', $token)->first();

        if (!$user || time() > $user['reset_token_expiration']) {
            // Jika token tidak ditemukan atau telah kadaluwarsa, arahkan kembali ke halaman forgot password
            return redirect()->to(site_url('Auth/forget_pass'))->with('error', 'Invalid or expired reset token.');
        }

        // Cek apakah form telah disubmit
        if ($this->request->getMethod() === 'post') {
            $newPassword = $this->request->getPost('new_password');
            // Lakukan validasi password di sini jika diperlukan

            // Hash password baru dan simpan ke database
            $hashedPassword = password_hash('$newPassword', PASSWORD_DEFAULT);
            $userModel->update($user['id'], [
                'password' => $hashedPassword,
                'reset_token' => null,
                'reset_token_expiration' => null
            ]);

            return redirect()->to(site_url('/Auth/index'))->with('success', 'Password has been reset. You can now login with your new password.');
        }

        // Jika method bukan POST, tampilkan halaman reset password
        return view('Auth/forget_pass');
    }

    // public function forgotPassword()
    // {
    //     $email = $this->request->getPost('email');

    //     // Cari pengguna berdasarkan email
    //     $userModel = new User_loginModel();
    //     $user = $userModel->where('email', $email)->first();

    //     if ($user) {
    //         // Generate JWT token
    //         $key = 'your-secret-key';
    //         $tokenData = [
    //             'user_id' => $user['id'],
    //             'email' => $email,
    //         ];
    //         $token = JWT::encode($tokenData, $key, 'HS256');

    //         // Kirim token ke email pengguna
    //         // Implementasi pengiriman email di sini

    //         return $this->response->setJSON([
    //             'message' => 'Token reset password telah dikirim ke email Anda.'
    //         ]);
    //     } else {
    //         return $this->response->setJSON([
    //             'error' => 'Pengguna dengan email tersebut tidak ditemukan.'
    //         ]);
    //     }
    // }


    // public function sendResetToken()
    // {
    //     $email = $this->request->getPost('email');

    //     // Cari pengguna berdasarkan email
    //     $userModel = new UserModel();
    //     $user = $userModel->where('email', $email)->first();

    //     if ($user) {
    //         // Generate token
    //         $key = 'your-secret-key';
    //         $tokenData = [
    //             'user_id' => $user['id'],
    //             'email' => $email,
    //         ];
    //         $token = JWT::encode($tokenData, $key, 'HS256');

    //         // Kirim token ke email pengguna
    //         // Implementasi pengiriman email di sini

    //         return redirect()->to('Auth/resetPassword')->with('success', 'Token reset password telah dikirim ke email Anda.');
    //     } else {
    //         return redirect()->to('Auth/forget_pass')->with('error', 'Pengguna dengan email tersebut tidak ditemukan.');
    //     }
    // }

    // public function resetPassword()
    // {
    //     $token = $this->request->getPost('token');
    //     $password = $this->request->getPost('password');

    //     $key = 'your-secret-key';

    //     try {
    //         $decodedToken = JWT::decode($key, 'HS256', $token, $password);

    //         // Ubah password pengguna berdasarkan data dari token
    //         $userModel = new User_loginModel();
    //         $user = $userModel->where('email', $decodedToken->email)->first();

    //         if ($user) {
    //             $password = $this->request->getPost('password');
    //             $userModel->update($user['id'], ['password' => password_hash('$password', PASSWORD_DEFAULT)]);



    //             return $this->response->setJSON([
    //                 'message' => 'Password berhasil diubah.'
    //             ]);
    //         } else {
    //             return $this->response->setJSON([
    //                 'error' => 'Gagal mengubah password.'
    //             ]);
    //         }
    //     } catch (\Exception $e) {
    //         return $this->response->setJSON([
    //             'error' => 'Token tidak valid.'
    //         ]);
    //     }
    // }

    // public function resetPassword()
    // {
    //     $token = $this->request->getVar('token');

    //     if (!$token) {
    //         return redirect()->to('Auth/forget_pass')->with('error', 'Token tidak valid.');
    //     }

    //     try {
    //         $key = 'your-secret-key';
    //         $decodedToken = JWT::decode($key, ['HS256'], $token);

    //         return view('auth/reset_password', ['token' => $token]);
    //     } catch (\Exception $e) {
    //         return redirect()->to('Auth/forget_pass')->with('error', 'Token tidak valid.');
    //     }
    // }

    // public function processResetPassword()
    // {
    //     $token = $this->request->getPost('token');
    //     $newPassword = $this->request->getPost('new_password');

    //     try {
    //         $key = 'your-secret-key';  // Ganti dengan secret key yang sesuai
    //         $decodedToken = JWT::decode($key, ['HS256'], $token);

    //         $userModel = new User_loginModel();
    //         $user = $userModel->where('email', $decodedToken->email)->first();

    //         if ($user) {
    //             // Update password
    //             $userModel->update($user['id'], ['password' => password_hash($newPassword, PASSWORD_DEFAULT)]);
    //             return redirect()->to('Auth/index')->with('success', 'Password berhasil diubah.');
    //         } else {
    //             return redirect()->to('Auth/forget_pass')->with('error', 'Gagal mengubah password.');
    //         }
    //     } catch (\Exception $e) {
    //         return redirect()->to('Auth/forget_pass')->with('error', 'Token tidak valid.');
    //     }
    // }
}
