<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;


class UserFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {


        // jika user belum login
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('Auth/index');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $user = session(''); // Gantikan dengan cara Anda mengambil data pengguna

        if ($user && $user['role'] !== '0') {
            return redirect()->to('/Admin/dashboard'); // Redirect pengguna biasa
        }
    }
}
