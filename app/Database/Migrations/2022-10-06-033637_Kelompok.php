<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelompok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kelompok_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'kelompok_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kelompok_pj' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE
            ],
            'users_id' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => TRUE
            ],
            'petugas_id' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => TRUE
            ]
        ]);
        $this->forge->addKey('kelompok_id', true);
        $this->forge->addForeignKey('pelanggan_id', 'pelanggan', 'pelanggan_id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('petugas_id', 'petugas', 'petugas_id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('kelompok');
    }

    public function down()
    {
        $this->forge->dropTable('kelompok');
    }
}
