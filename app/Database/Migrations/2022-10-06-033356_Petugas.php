<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Petugas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'petugas_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'petugas_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'petugas_wilayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',    
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'default null' => TRUE    
            ]
        ]);
        $this->forge->addKey('petugas_id', true);
        $this->forge->createTable('petugas');
    }

    public function down()
    {
        $this->forge->dropTable('petugas');
    }
}
