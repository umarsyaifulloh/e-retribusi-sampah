<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role_nama'       => 'admin',
            ],
            [
                'role_nama'       => 'op',
            ],
            [
                'role_nama'       => 'bendahara',
            ],
            [
                'role_nama'       => 'opd',
            ]
            ];
        
        // Simple Queries
        $this->db->table('role')->insertBatch($data);

    }
}