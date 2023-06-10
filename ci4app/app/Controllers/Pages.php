<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        //return view('pages/home'); kalo pake return harus 1
        echo view('layout/header');
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        echo view('layout/header');
        echo view('pages/about');
        echo view('layout/footer');
    }
}
