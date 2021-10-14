<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTarefas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tarefa_id'          => [
                'type'           => 'INT',
                'constraint'     => 8,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'descricao'       => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'prioridade_id'       => [
                'type'       => 'INT',
                'constraint' => '5',

            ],
            'status_id'       => [
                'type'       => 'INT',
                'constraint' => '5',

            ],
            'pessoa_id'       => [
                'type'       => 'INT',
                'constraint' => '8',

            ]
        ]);

        $this->forge->addKey('tarefa_id', true);

        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (prioridade_id) REFERENCES prioridades(prioridade_id)');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (status_id) REFERENCES status(status_id)');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (pessoa_id) REFERENCES pessoas(pessoa_id)');
        // $this->forge->addForeignKey('prioridade_id', 'prioridades', 'prioridade_id');
        // $this->forge->addForeignKey('status_id', 'status', 'status_id');
        // $this->forge->addForeignKey('pessoa_id', 'pessoas', 'pessoa_id');
        $this->forge->createTable('tarefas');


    }

    public function down()
    {
        $this->forge->dropTable('tarefas');
    }
}
