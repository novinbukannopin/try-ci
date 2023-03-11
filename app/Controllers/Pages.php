<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home "
        ];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('Pages/home');
        echo view('layout/footer');
    }
    public function about()
    {
        $data = [
            'title' => "About "
        ];

        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('Pages/about');
        echo view('layout/footer');
    }
}
