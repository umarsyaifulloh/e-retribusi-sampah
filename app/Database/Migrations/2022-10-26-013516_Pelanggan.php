<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pelanggan_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'pelanggan_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pelanggan_alamat' => [
                'type'       => 'INT',
                'constraint' => '25',
            ],
            'pelanggan_telp' => [
                'type'       => 'BIGINT',
                'constraint' => '25',
            ],
            'pelanggan_kategori' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => TRUE,
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('pelanggan_id', true);
        // $this->forge->addForeignKey('users_role', 'role', 'role_id');
        $this->forge->addForeignKey('pelanggan_kategori', 'kategori', 'kategori_id', 'CASCADE', 'SET NULL');

        $this->forge->createTable('pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }
}
