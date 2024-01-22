<?php

namespace App\Controllers;

class Home_admin extends BaseController
{
    public function homeadmin()
    {
        // return view('admin/home_admin');
        
        echo view('template/header');
        echo view('admin/home_admin');
        echo view('template/footer');
    }
    }
