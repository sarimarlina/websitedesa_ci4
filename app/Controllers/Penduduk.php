<?php

namespace App\Controllers;
use App\Models\Penduduk_model;


class Penduduk extends BaseController
{
   public function __construct()
   {
        $this->Penduduk_model = new Penduduk_model();
   } 
   public function penduduk()
   {
    $data['penduduk'] = $this->Penduduk_model->getPenduduk();

    echo view('/template/header');
    echo view('/admin/penduduk/penduduk',$data);
    echo view('/template/footer');
   }
   public function tambah_data()
   {
    echo view('/template/header');
    echo view('/admin/penduduk/tambahdata');
    echo view('template/footer');
   }
   public function tambah()
   {
    $Penduduk_model = new Penduduk_model();
    $data = [
        'nik'=>$this->request->getPost('nik'),
        'namapenduduk'=>$this->request->getPost('namapenduduk'),
        'jk'=>$this->request->getPost('jk'),
        'alamat'=>$this->request->getPost('alamat'),
    ];
    $Penduduk_model->insert($data);
    return redirect()->to('/admin/penduduk/penduduk');
   }
   public function delete($id)
   {
       $Penduduk_model = new Penduduk_model();
       $Penduduk_model->deletePenduduk($id);

       return redirect()->to('/admin/penduduk/penduduk');
   }
   public function edit($id)
   {
    $data['penduduk'] = $this->Penduduk_model->getPendudukByid($id);
    echo view('/template/header',$data);
    echo view('/admin/penduduk/edit',$data);
    echo view('template/footer');
   }
   public function update()
   {
       $id = $this->request->getPost('id');

       $data = [
        'nik'=>$this->request->getPost('nik'),
        'namapenduduk'=>$this->request->getPost('namapenduduk'),
        'jk'=>$this->request->getPost('jk'),
        'alamat'=>$this->request->getPost('alamat'),
       ];

       try {
           // Jika update berhasil, redirect ke halaman pasien
           if ($this->Penduduk_model->updatePenduduk($data, $id)) {
               return redirect()->to('/admin/penduduk/penduduk')->with('success', 'Data berhasil diperbarui.');
           } else {
               // Tampilkan pesan jika data tidak ditemukan atau tidak diubah
               return redirect()->back()->with('error', 'Data tidak ditemukan atau tidak diubah.');
           }
       } catch (\Exception $e) {
           // Tampilkan pesan kesalahan untuk membantu debugging
           die($e->getMessage());
       }
   }

}
