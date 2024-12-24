<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\BeritaModel;

class Home extends BaseController
{
    protected $HomeModel;
    protected $BeritaModel;


    public function __construct()
    {
        $this->HomeModel = new HomeModel();
        $this->BeritaModel = new BeritaModel();
    }
    public function index()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }

        $home = $this->HomeModel->findAll();
        $berita = $this->BeritaModel->findAll();

        $data = [
            'title' => 'Home',
            'home' => $home,
            'berita' => $berita
        ];
        echo view('pages/template/headerportal');
        echo view('pages/portal/index', $data);
        echo view('pages/template/footerportal');
    }

    public function contact()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }

        echo view('pages/template/headerportal');
        echo view('pages/portal/contact');
        echo view('pages/template/footerportal');
    }
    public function galeri()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/galeri');
        echo view('pages/template/footerportal');
    }

    public function dak()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/dak');
        echo view('pages/template/footerportal');
    }

    public function berita()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/berita');
        echo view('pages/template/footerportal');
    }
    public function detailBerita()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/detailBerita');
        echo view('pages/template/footerportal');
    }
    public function timeline()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/timeline');
        echo view('pages/template/footerportal');
    }

    public function pejabat()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/pejabat');
        echo view('pages/template/footerportal');
    }
    public function detailGaleri()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/detailGaleri');
        echo view('pages/template/footerportal');
    }
    public function produkHukum()
    {
        if (session('id')) {
            return redirect()->to(site_url('Admin/dashboard'));
        }
        echo view('pages/template/headerportal');
        echo view('pages/portal/produkHukum');
        echo view('pages/template/footerportal');
    }
}
