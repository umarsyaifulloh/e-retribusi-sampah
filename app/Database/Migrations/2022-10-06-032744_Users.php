<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'users_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'users_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'users_nip' => [
                'type'       => 'INT',
                'constraint' => '25',
            ],
            'users_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'users_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'users_alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'users_telp' => [
                'type'       => 'INT',
                'constraint' => '25',
            ],
            'users_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE
            ],
            'users_role' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => TRUE,
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('users_id', true);
        // $this->forge->addForeignKey('users_role', 'role', 'role_id');
        $this->forge->addForeignKey('users_role', 'role', 'role_id', 'CASCADE', 'SET NULL');

        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
