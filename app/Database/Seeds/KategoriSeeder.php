<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 1; $i < 5; $i++) {

            $data = [
                'kategori_nama'       => $faker->name,
                'kategori_besaran'    => 5000,
                'created_at'          => \CodeIgniter\I18n\Time::now(),
            ];
            $this->db->table('kategori')->insert($data);
        }
    }
}
