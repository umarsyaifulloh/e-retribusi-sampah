<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class KelompokModel extends Model
{
    protected $table = 'kelompok';
    protected $primaryKey = 'kelompok_id';
    protected $allowedFields = ['kelompok_id', 'kelompok_nama', 'kelompok_pj', 'kelompok_'];

    public function getkelompok($kelompok_id = false)
    {
        if ($kelompok_id == false) {
            return $this->findAll();
        }

        return $this->where(['kelompok_id' => $kelompok_id])->first();
    }
}
