<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kategori_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'kategori_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kategori_besaran' => [
                'type'       => 'INT',
                'constraint' => '11',    
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE    
            ]
        ]);
        $this->forge->addKey('kategori_id', true);
        $this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
