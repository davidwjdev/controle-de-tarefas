<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePessoas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pessoa_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 8,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nome'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '250',
            ]
    ]);
    $this->forge->addKey('pessoa_id', true);
    $this->forge->createTable('pessoas');
    }

    public function down()
    {
        $this->forge->dropTable('pessoas');
    }
}
