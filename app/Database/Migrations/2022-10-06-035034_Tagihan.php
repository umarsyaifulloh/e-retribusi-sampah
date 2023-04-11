<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tagihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tagihan_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'tagihan_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE    
            ],
            'kelompok_id' => [
                'type'       => 'INT',
                'unsigned'       => TRUE,
                'constraint' => '11',    
            ],
            'kategori_id' => [
                'type'       => 'INT',
                'unsigned'       => TRUE,
                'constraint' => '11',    
            ],
            'pendapatan_id' => [
                'type'       => 'INT',
                'unsigned'       => TRUE,
                'constraint' => '11',    
            ],
        ]);
        $this->forge->addKey('tagihan_id', true);
        $this->forge->addForeignKey('kelompok_id', 'kelompok', 'kelompok_id');
        $this->forge->addForeignKey('kategori_id','kategori','kategori_id');
        $this->forge->addForeignKey('pendapatan_id', 'pendapatan','pendapatan_id');
        $this->forge->createTable('tagihan');
    }

    public function down()
    {
        $this->forge->dropTable('tagihan');
    }
}
