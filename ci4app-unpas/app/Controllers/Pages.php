<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Coba Aja',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
        //return view('pages/home'); kalo pake return harus 1

        // ---ini kalo header dan footer di file terpisah---
        // echo view('layout/header');
        // echo view('pages/home');
        // echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'tittle' => 'About Me'
        ];

        echo view('pages/about', $data);

        // echo view('layout/header');
        // echo view('pages/about');
        // echo view('layout/footer');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                'tipe' => 'rumah',
                'alamat' => 'jl. abc no 5'
            ],
            'alamat2' => [
                'tipe' => 'kantor',
                'alamat' => 'semarang'
            ]
        ];

        return view('pages/contact', $data);
    }
}
