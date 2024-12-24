<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\User_loginModel;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // $userModel = new User_loginModel();
        // $user = $userModel->find(session()->get('logged_in'));

        // if ($user['role'] !== 'Admin') {
        //     // Jika pengguna bukan admin, arahkan mereka ke halaman lain
        //     return redirect()->to('User/dashboard');
        // }

        // $user = session('logged_in'); // Gantikan dengan cara Anda mengambil data pengguna

        // if ($user && $user['role'] !== 'Admin') {
        //     return redirect()->to('/User/dashboard'); // Redirect pengguna biasa
        // }

        // jika user belum login
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('Auth/index');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $user = session(''); // Gantikan dengan cara Anda mengambil data pengguna

        if ($user && $user['role'] !== '1') {
            return redirect()->to('/User/dashboard'); // Redirect pengguna biasa
        }
    }
}
