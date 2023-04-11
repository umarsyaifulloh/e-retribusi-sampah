<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaksi_id' => [
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
            'tagihan_id' => [
                'type'       => 'INT',
                'unsigned'       => TRUE,
                'constraint' => '11',    
            ],
        ]);
        $this->forge->addKey('transaksi_id', true);
        $this->forge->addForeignKey('tagihan_id', 'tagihan', 'tagihan_id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
