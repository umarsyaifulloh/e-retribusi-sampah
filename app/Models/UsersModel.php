<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'users_id';
    protected $allowedFields = ['users_id', 'users_nama', 'users_nip', 'users_email', 'users_password', 'users_alamat', 'users_telp', 'users_status', 'created_at', 'users_role'];


    public function getUsers($users_id = false)
    {
        if ($users_id == false) {
            return $this->findAll();
        }
        return $this->where(['users_id' => $users_id])->first();
    }
    public function getAll()
    {
        $builder = $this->db->table('users');
        $builder->join('role', 'role.role_id = users.users_role');
        $query = $builder->get();
        return $query->getResult();
    }
    public function getDetail($users_id)
    {
        $builder = $this->db->table('users');
        $builder->join('role', 'role.role_id = users.users_role')->where('users_id', $users_id);
        $query = $builder->get();
        return $query->getResultArray()[0];
    }
    // public function getDelete($users_id)
    // {
    //     $builder = $this->db->table('users');
    //     $builder->join('role', 'role.role_id = users.users_role')->where('users_id', $users_id);
    //     $query = $builder->get();
    //     return $query->getResult();
    // }
}
