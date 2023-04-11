<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class PetugasModel extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'petugas_id';
    protected $allowedFields = ['petugas_nama', 'petugas_no', 'petugas_wilayah', 'created_at'];


    public function getPetugas($petugas_id = false)
    {
        if ($petugas_id == false) {
            return $this->findAll();
        }

        return $this->where(['petugas_id' => $petugas_id])->first();
    }
}
