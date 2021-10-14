<?php

namespace App\Models;

use CodeIgniter\Model;

class TarefaModel extends Model
{
    protected $table = 'tarefas';

    protected $primaryKey = 'tarefa_id';

	protected $allowedFields = ['nome', 'prioridade_id', 'status_id','pessoa_id'];
}
?>