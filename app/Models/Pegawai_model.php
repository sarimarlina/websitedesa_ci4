<?php

namespace App\Models;

use CodeIgniter\Model;

class Pegawai_model extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id';

    protected $allowedFields = ['namapegawai','nik','jabatan','jk','alamat','nohp','email'];

    //fungsi untuk mendapatkan semua data pasien
    public function getPegawai()
    {
        return $this->findAll();
    }
    //dapat data pasien berdasar id
    public function getPegawaiByid($id)
    {
        return $this->find($id);
    }
    //menambah data pegawai
    public function insertPegawai($data)
    {
        return $this->insert($data);
    }
    //menhapus data
    public function deletePegawai($id)
    {
        return $this->delete($id);
    }
      // Fungsi untuk mengupdate data pasien
      public function updatePegawai($data, $id)
      {
          // Memastikan bahwa ada data yang valid untuk diperbarui
          if (empty($data)) {
              throw new \InvalidArgumentException('Data untuk diperbarui kosong.');
          }
  
          // Menambahkan klausa where untuk mengidentifikasi rekaman yang akan diperbarui
          $result = $this->update($id, $data);
  
          // Memberikan exception jika terjadi kesalahan pada saat pembaruan data
          if (!$result) {
              throw new \RuntimeException('Gagal memperbarui data pasien.');
          }
  
          return true;
      }
  
  
   
      
    
    

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