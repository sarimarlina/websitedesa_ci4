<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function profil()
    {
        // return view('halaman/profil');
        echo view('halaman/profil');
        echo view('layout/header');
    }
}
