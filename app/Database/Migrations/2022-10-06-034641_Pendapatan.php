<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendapatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pendapatan_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'pendapatan_tahun' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'pendapatan_target' => [
                'type'       => 'INT',
                'constraint' => '11',    
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE    
            ]
        ]);
        $this->forge->addKey('pendapatan_id', true);
        $this->forge->createTable('pendapatan');
    }

    public function down()
    {
        $this->forge->dropTable('pendapatan');
    }
}
