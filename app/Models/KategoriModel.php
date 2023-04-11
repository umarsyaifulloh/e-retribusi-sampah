<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'kategori_id';
    protected $allowedFields = ['kategori_id', 'kategori_nama', 'kategori_besaran', 'created_at'];

    public function getKategori($kategori_id = false)
    {
        if ($kategori_id == false) {
            return $this->findAll();
        }

        return $this->where(['kategori_id' => $kategori_id])->first();
    }
}
