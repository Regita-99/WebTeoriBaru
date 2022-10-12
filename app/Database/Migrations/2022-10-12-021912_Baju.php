<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Baju extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'npm' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],
            'update_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bajus');
    }

    public function down()
    {
        $this->forge->dropTable('bajus');
    }
}
