<?php

namespace App\Controllers;

class Destinasi extends BaseController
{
    public function destinasi()
    {
        // echo view('layout/header');
        echo view('/halaman/menuutama');
        echo view('/awal/destinasi');
    }
}
