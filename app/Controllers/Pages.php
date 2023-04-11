<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Crud Petugas'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about me'
        ];
        return view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Keron Lor',
                    'kota' => 'Wonogiri'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl perkutut 22',
                    'kota' => 'wonogiri'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
