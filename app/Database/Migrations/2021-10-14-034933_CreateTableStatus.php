<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableStatus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'status_id'          => [
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
        $this->forge->addPrimaryKey('status_id', true);
        $this->forge->createTable('status');
    }

    public function down()
    {
        $this->forge->dropTable('prioridades');
    }
}
