<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePrioridades extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'prioridade_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nome'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '50',
            ]
    ]);
    $this->forge->addKey('prioridade_id', true);
    $this->forge->createTable('prioridades');
    }

    public function down()
    {
        $this->forge->dropTable('prioridades');
    }
}
