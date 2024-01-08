<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('nonup2d/beranda');
    }

    public function login(): string
    {
        return view('up2d/login');
    }

    public function unit(): string
    {
        return view('up2d/unit');
    }

    public function tambah_unit(): string
    {
        return view('up2d/tambah_unit');
    }

    public function edit_unit(): string
    {
        return view('up2d/edit_unit');
    }
}
