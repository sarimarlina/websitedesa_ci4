<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_model extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id';

    protected $allowedFields = ['namapegawai','nik','jabatan','jk','alamat','nohp','email'];

    //fungsi untuk mendapatkan semua data pasien
    public function getDatapegawai()
    {
        return $this->findAll();
    }
    //dapat data pasien berdasar id
    
    //menambah data pegawai
  
  
  
   
      
    
    

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}