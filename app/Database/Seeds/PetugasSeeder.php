<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetugasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'petugas_nama'       => 'fullo',
            'petugas_wilayah'    => 'solo',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO petugas (petugas_nama, petugas_wilayah) VALUES(:petugas_nama:, :petugas_wilayah:)', $data);

        // Using Query Builder
        // $this->db->table('users')->insert($data);
    }
}