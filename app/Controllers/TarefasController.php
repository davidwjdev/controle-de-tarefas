<?php

namespace App\Controllers;

use App\Models\TarefaModel;
use App\Models\PessoaModel;
use App\Models\PriopridadeModel;
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
        $pessoaModel = new PessoaModel();
        $data['pessoas'] = $pessoaModel->findAll();

        return view('tarefas/create',['pessoas' => $data]);
    }
}

?>