<?php

namespace App\Controllers;

class Sejarah extends BaseController
{
    public function sejarah()
    {
        // echo view('layout/header');
        echo view('/halaman/menuutama');
        echo view('/awal/sejarah');
    }
}
