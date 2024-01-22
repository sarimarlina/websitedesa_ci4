<?php

namespace App\Controllers;

class Visi extends BaseController
{
    public function visi()
    {
        // echo view('layout/header');
        echo view('/halaman/menuutama');
        echo view('/awal/visimisi');
    }
}
