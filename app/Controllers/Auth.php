<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function registrasi()
    {
        return view('auth/registrasi');
    }

    public function processRegister()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nama'     => 'required',
            'username' => 'required|is_unique[tbl_user.username]',
            'password' => 'required|min_length[4]',
            'level'    => 'required'
        ];


        // Validasi formulir
        if (!$this->validate($rules)) {
            dd($validation->getErrors()); // Debugging
            return redirect()->to(base_url('/auth/registrasi'))->withInput()->with('errors', $validation->getErrors());
        }

        // Proses pendaftaran
        $authmodel = new Authmodel();

        $data = [
            'nama'     => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'level'    => $this->request->getPost('level'),
        ];

        // Simpan data ke database
        $authmodel->insertUser($data);

        // dd("Registrasi berhasil!"); // Debugging

        // Arahkan ke halaman login setelah registrasi berhasil
        return redirect()->to(base_url('/auth/auth'))->with('success', 'Registrasi berhasil! Silakan login.');
    }



    public function login()
    {
        return view('auth/auth');
        
    }

    public function processLogin()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'username' => 'required',
            'password' => 'required',
            'level'    => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('auth/auth')->withInput()->with('errors', $validation->getErrors());
        }

        $authModel = new Authmodel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $level    = $this->request->getPost('level');

        $user = $authModel->getUserByUsername($username);

        if ($user && $password == $user['password'] && $user['level'] == $level) {
            // Set session atau token sesi di sini
            $session = session(); // Menggunakan session() helper
            $sessionData = [
                'user_id'  => $user['id'],
                'username' => $user['username'],
                'level'    => $user['level'],
            ];
            $session->set($sessionData);

            // Redirect sesuai level
            // Redirect sesuai level
            return redirect()->to($user['level'] == 'admin' ? '/admin/home_admin' : '/datapegawai');
        } else {
            return redirect()->to('/auth/auth')->with('error', 'Login gagal. Periksa kembali username, password, dan level Anda.');
        }
    }
}