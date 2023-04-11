<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $allowedFields = ['pelanggan_id', 'pelanggan_nama', 'pelanggan_alamat', 'provinsi', 'kecamatan', 'kabupaten', 'pelanggan_telp',  'pelanggan_kategori'];


    public function getPelanggan($pelanggan_id = false)
    {
        if ($pelanggan_id == false) {
            return $this->findAll();
        }
        return $this->where(['pelanggan_id' => $pelanggan_id])->first();
    }
    public function getAll()
    {
        $builder = $this->db->table('pelanggan');
        $builder->join('kategori', 'kategori.kategori_id = pelanggan.pelanggan_kategori');
        $query = $builder->get();
        return $query->getResult();
    }
    public function getDetail($pelanggan_id)
    {
        $builder = $this->db->table('pelanggan');
        $builder->join('kategori', 'kategori.kategori_id = pelanggan.pelanggan_kategori')->where('pelanggan_id', $pelanggan_id);
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
