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

    public function contact()
    {
        $data = [
            'title' => "Contact ",
            'address' => [
                [
                    'type' => 'Rumah',
                    'address_detail' => 'Jl. Diponegoro 291',
                    'city' => 'Surabaya'
                ],
                [
                    'type' => 'Kantor',
                    'address_detail' => 'Jl. Raya Darmo 88',
                    'city' => 'Surabaya'
                ]
            ],

        ];
        echo view('Pages/contact', $data);
    }
}
