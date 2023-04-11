<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [

                'users_nama' => 'fullo',
                'users_nip'    => '12345678911',
                'users_email' => 'darth@theempire.com',
                'users_password'    => 'fullo12',
                'users_alamat' => 'wonogiri',
                'users_telp'    => '09876543212',
                'users_status' => 'aktif',
                'users_id' => '1',
                'created_at'          => \CodeIgniter\I18n\Time::now()
            ],
            [

                'users_nama' => 'umar',
                'users_nip'    => '12345678912',
                'users_email' => 'umar@gmail.com',
                'users_password'    => 'fullo13',
                'users_alamat' => 'wonogiri',
                'users_telp'    => '09876543213',
                'users_status' => 'aktif',
                'users_id' => '2',
                'created_at'          => \CodeIgniter\I18n\Time::now()
            ],
            [

                'users_nama' => 'izah',
                'users_nip'    => '12345678913',
                'users_email' => 'izah@gmail.com',
                'users_password'    => 'fullo14',
                'users_alamat' => 'wonogiri',
                'users_telp'    => '09876543214',
                'users_status' => 'tidak aktif',
                'users_id' => '3',
                'created_at'          => \CodeIgniter\I18n\Time::now()

            ],
            [

                'users_nama' => 'zahro',
                'users_nip'    => '12345678914',
                'users_email' => 'zahro@gmail.com',
                'users_password'    => 'fullo15',
                'users_alamat' => 'wonogiri',
                'users_telp'    => '09876543215',
                'users_status' => 'tidak aktif',
                'users_id' => '4',
                'created_at'          => \CodeIgniter\I18n\Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (users_nama, users_nip, users_email, users_password, users_alamat, users_telp, users_status, role_id) VALUES(:users_nama:, :users_nip:, :users_email:, :users_password:, :users_alamat:, :users_telp:, :users_status: ,:role_id:)', $data);

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
