<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function about($nama) 
    {
        echo "ini dikirim dari segment nama: $nama";
    }
}