<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // Menampilkan halaman login
        return view('login');
    }

    public function register()
    {
        // Menampilkan halaman registrasi
        return view('register');
    }

    public function processLogin()
    {
        // Proses login pengguna
    }

    public function processRegister()
    {
        // Proses registrasi pengguna
    }
}
