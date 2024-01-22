<?php

namespace App\Models;

use CodeIgniter\Model;

class Authmodel extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'username', 'password', 'level'];
    protected $useTimestamps = false;

    public function insertUser(array $data): bool
    {
        return $this->insert($data);
    }

    public function getUserByUsername(string $username)
    {
        return $this->where('username', $username)->first();
    }
}