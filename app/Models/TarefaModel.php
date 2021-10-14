<?php

namespace App\Models;

use CodeIgniter\Model;

class Tarefa extends Model
{
    protected $table = 'tarefas';
    
    public function getTask($id = null)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(["tarefa_id" => $id]);
        }
    }
}
?>