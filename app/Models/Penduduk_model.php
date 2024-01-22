<?php

namespace App\Models;

use CodeIgniter\Model;

class Penduduk_model extends Model
{
    protected $table      = 'penduduk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nik','namapenduduk','jk','alamat'];

    public function getPenduduk()
    {
        return $this->findAll();
    }
    //dapat data pasien berdasar id
    public function getPendudukByid($id)
    {
        return $this->find($id);
    }
    //menambah data pegawai
    public function insertPenduduk($data)
    {
        return $this->insert($data);
    }
    //menhapus data
    public function deletePenduduk($id)
    {
        return $this->delete($id);
    }
      // Fungsi untuk mengupdate data pasien
      public function updatePenduduk($data, $id)
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