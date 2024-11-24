<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {   
        $data = [
            'judul' => 'Login',
        ];
        return view('v_login',$data);
    }
}
