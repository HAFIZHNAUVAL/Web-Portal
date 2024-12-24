<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('id')) {
            return redirect()->to(site_url('Auth/index'));
        }

        // jika user belum login
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('Auth/index');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed after the request is processed
    }
}
