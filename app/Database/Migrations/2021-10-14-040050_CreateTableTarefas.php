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
            'prioridade_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => false,
            ],
            'status_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => false,

            ],
            'pessoa_id'          => [
                'type'           => 'INT',
                'constraint'     => 8,
                'unsigned'       => true,
                'null' => false,
            ]
        ]);

        $this->forge->addPrimaryKey('tarefa_id', true);

        $this->forge->addForeignKey('prioridade_id', 'prioridades', 'prioridade_id','CASCADE','SET NULL');
        $this->forge->addForeignKey('status_id', 'status', 'status_id','CASCADE','SET NULL');
        $this->forge->addForeignKey('pessoa_id', 'pessoas', 'pessoa_id','CASCADE','SET NULL');

        $this->forge->createTable('tarefas');

        
        // $this->dbforge->add_column('tarefas',[
        //     'CONSTRAINT fk_prioridade_id FOREIGN KEY(prioridade_id) REFERENCES table(prioridade_id)',
        // ]);
        // $this->dbforge->add_column('tarefas',[
        //     'CONSTRAINT fk_status_id FOREIGN KEY(status_id) REFERENCES table(status_id)',
        // ]);
        // $this->dbforge->add_column('tarefas',[
        //     'CONSTRAINT fk_pessoa_id FOREIGN KEY(pessoa_id) REFERENCES table(pessoa_id)',
        // ]);

        // $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (prioridade_id) REFERENCES prioridades(prioridade_id)');
        // $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (status_id) REFERENCES status(status_id)');
        // $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (pessoa_id) REFERENCES pessoas(pessoa_id)');
        // $this->forge->addForeignKey('prioridade_id', 'prioridades', 'prioridade_id','CASCADE','SET NULL');
        // $this->forge->addForeignKey('status_id', 'status', 'status_id','CASCADE','SET NULL');
        // $this->forge->addForeignKey('pessoa_id', 'pessoas', 'pessoa_id','CASCADE','SET NULL');



    }

    public function down()
    {
        $this->forge->dropTable('tarefas');
    }
}
