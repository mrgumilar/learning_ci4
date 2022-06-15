<?php

namespace App\Controllers;

class AdminLogin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Administrator'
        ];
        return view('backoffice/auth/login', $data);
    }


    public function lupa_password()
    {
        $data = [
            'title' => 'Lupa Password'
        ];
        return view('backoffice/auth/lupa_password', $data);
    }
}