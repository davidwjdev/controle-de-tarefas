<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PrioridadesSeeds extends Seeder
{
    public function run()
    {

        $data = [
            array('nome'    => 'Baixa'),
            array('nome'    => 'Média'),
            array('nome'    => 'Alta')
        ];

        $this->db->table('prioridades')->insertBatch($data);
    }
}
