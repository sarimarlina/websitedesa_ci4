<?php

namespace App\Controllers;

class Menuutama extends BaseController
{
    public function index()
    {
        // return view('halaman/menuutama');
       echo view('halaman/menuutama');
       echo view('layout/header');
    }
}
