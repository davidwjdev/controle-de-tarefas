<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PessoasSeeds extends Seeder
{
    public function run()
    {
        $data = [
            array('nome'    => 'José da Silva'),
            array('nome'    => 'Vinicius Almeida'),
            array('nome'    => 'Larissa Mendes')
        ];

        $this->db->table('pessoas')->insertBatch($data);
    }
}
