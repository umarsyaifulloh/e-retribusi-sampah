<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class RolesModel extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'role_id';
    protected $allowedFields = ['role_id', 'role_nama'];


    public function getUsers($users_id = false)
    {
        if ($users_id == false) {
            return $this->findAll();
        }

        return $this->where(['users_id' => $users_id])->first();
    }
}
