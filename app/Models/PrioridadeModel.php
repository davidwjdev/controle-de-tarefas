<?php

namespace App\Models;

use CodeIgniter\Model;

class PrioridadeModel extends Model
{
    protected $table = 'prioridades';

    protected $primaryKey = 'prioridade_id';

	protected $allowedFields = ['nome'];
}
?>