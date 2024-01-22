<?php

namespace App\Controllers;
use App\Models\Pegawai_model;


class Pegawai extends BaseController
{
   public function __construct()
   {
        $this->Pegawai_model = new Pegawai_model();
   } 
   public function pegawai()
   {
    $data['pegawai'] = $this->Pegawai_model->getPegawai();

    echo view('/template/header');
    echo view('/admin/pegawai/pegawai',$data);
    echo view('/template/footer');
   }
   public function tambah_data()
   {
    echo view('/template/header');
    echo view('/admin/pegawai/tambahdata');
    echo view('template/footer');
   }
   public function tambah()
   {
    $Pegawai_model = new Pegawai_model();
    $data = [
        'namapegawai'=>$this->request->getPost('namapegawai'),
        'nik'=>$this->request->getPost('nik'),
        'jabatan'=>$this->request->getPost('jabatan'),
        'jk'=>$this->request->getPost('jk'),
        'alamat'=>$this->request->getPost('alamat'),
        'nohp'=>$this->request->getPost('nohp'),
        'email'=>$this->request->getPost('email'),
        
    ];
    $Pegawai_model->insert($data);
    return redirect()->to('/admin/pegawai/pegawai');
   }
   public function delete($id)
   {
       $Pegawai_model = new Pegawai_model();
       $Pegawai_model->deletePegawai($id);

       return redirect()->to('/admin/pegawai/pegawai');
   }
   public function edit($id)
   {
    $data['pegawai'] = $this->Pegawai_model->getPegawaiByid($id);
    echo view('/template/header',$data);
    echo view('/admin/pegawai/edit',$data);
    echo view('template/footer');
   }
   public function update()
   {
       $id = $this->request->getPost('id');

       $data = [
        'namapegawai'=>$this->request->getPost('namapegawai'),
        'nik'=>$this->request->getPost('nik'),
        'jabatan'=>$this->request->getPost('jabatan'),
        'jk'=>$this->request->getPost('jk'),
        'alamat'=>$this->request->getPost('alamat'),
        'nohp'=>$this->request->getPost('nohp'),
        'email'=>$this->request->getPost('email'),
       ];

       try {
           // Jika update berhasil, redirect ke halaman pasien
           if ($this->Pegawai_model->updatePegawai($data, $id)) {
               return redirect()->to('/admin/pegawai/pegawai')->with('success', 'Data berhasil diperbarui.');
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
