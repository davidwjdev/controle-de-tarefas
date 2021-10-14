<?php

namespace App\Controllers;

use App\Models\TarefaModel;
use CodeIgniter\Controller;

class TarefasController extends Controller
{
    public function index()
    {
        $model = new TarefaModel();
        $data['tarefa_id'] = $model//->orderBy('prioridade_id, status_id','DESC')
        ->findAll();
        return view('tarefas/index', $data);
    }
    public function create()
    {
        return view('tarefas/create');
    }
}

?>