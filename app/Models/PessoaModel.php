<?php

namespace App\Models;

use CodeIgniter\Model;

class PessoaModel extends Model
{
    protected $table = 'pessoas';

    protected $primaryKey = 'pessoa_id';

	protected $allowedFields = ['nome'];
}
?>