<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home "
        ];
        echo view('Pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => "About "
        ];

        echo view('Pages/about', $data);
    }
}
