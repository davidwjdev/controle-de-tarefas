<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusSeeds extends Seeder
{
    public function run()
    {
        $data = [
            array('nome'    => 'Pendente'),
            array('nome'    => 'Em Andamento'),
            array('nome'    => 'Concluído')
        ];

        $this->db->table('status')->insertBatch($data);
    }
}
