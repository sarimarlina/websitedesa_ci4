<?php

namespace App\Controllers;
use App\Models\Data_model;


class Datapegawai extends BaseController
{
   public function __construct()
   {
        $this->Data_model = new Data_model();
   } 
   public function datapegawai()
   {
    $data['pegawai'] = $this->Data_model->getDatapegawai();

    echo view('/template/header2');
    echo view('/datapegawai',$data);
    echo view('/template/footer');
   }
   
   
   
}
