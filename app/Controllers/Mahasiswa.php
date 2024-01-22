<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function mahasiswa()
    {
        echo view('template/header');
        echo view('admin/mahasiswa');
        echo view('template/footer');
    }
}