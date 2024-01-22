<?php

namespace App\Controllers;
use App\Models\Guru_model;

class Guru extends BaseController
{
    public function guru()
    {
        // return view('admin/home_admin');
        
        echo view('template/header');
        echo view('admin/guru/guru');
        echo view('template/footer');
    }
    public function formguru()
    {
        // return view('admin/home_admin');
        
        echo view('template/header');
        echo view('admin/guru/tambahdata');
        echo view('template/footer');
    }
    }
