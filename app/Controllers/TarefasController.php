<?php

namespace App\Controllers;

use App\Models\TarefaModel;
use App\Models\PessoaModel;
use App\Models\PrioridadeModel;
use App\Models\StatusModel;

use CodeIgniter\Controller;

class TarefasController extends Controller
{

    public function index()
    {
        $model = new TarefaModel();
        $data['tarefas'] = $model//->orderBy('prioridade_id, status_id','DESC')
        ->findAll();
        return view('tarefas/index', $data);
    }
    public function create()
    {
        $prioridadeModel = new PrioridadeModel();
        $prioridades['prioridades'] = $prioridadeModel->findAll();
        $statusModel = new StatusModel();
        $status['status'] = $statusModel->findAll();
        $pessoaModel = new PessoaModel();
        $pessoas['pessoas'] = $pessoaModel->findAll();
        return view('tarefas/create',['prioridades' => $prioridades,'status' => $status, 'pessoas' => $pessoas]);
    }
}

?>