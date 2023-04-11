<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class PendapatanModel extends Model
{
    protected $table = 'pendapatan';
    protected $primaryKey = 'pendapatan_id';
    protected $allowedFields = ['pendapatan_id', 'pendapatan_tahun', 'pendapatan_besar_target', 'created_at'];

    public function getPendapatan($pendapatan_id = false)
    {
        if ($pendapatan_id == false) {
            return $this->findAll();
        }

        return $this->where(['pendapatan_id' => $pendapatan_id])->first();
    }
}
