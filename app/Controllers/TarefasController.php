<?php

namespace App\Controllers;

use App\Models\TarefaModel;
use App\Models\PessoaModel;
use App\Models\PrioridadeModel;
use App\Models\StatusModel;

class TarefasController extends BaseController
{
    public function index()
    {
        // $model = new TarefaModel();
        // $data['tarefas'] = $model;
        $db = db_connect();
        $query = $db->query('select tar.tarefa_id, tar.nome as nome_tarefa, pri.nome as nome_prioridade, sta.nome as nome_status, pes.nome as nome_pessoa
         from  tarefas tar
         inner join prioridades pri on tar.prioridade_id = pri.prioridade_id
         inner join status sta on tar.status_id = sta.status_id
         inner join pessoas pes on tar.pessoa_id = pes.pessoa_id')->getResultArray();
        //->orderBy('tarefas.prioridade_id, tarefas.status_id','DESC')
        return view('tarefas/index', ['tarefas' => $query]);
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
    public function store() {
        $model = new TarefaModel();
        $data = [
            'nome' => $this->request->getVar('nome'),
            'prioridade_id'  => $this->request->getVar('prioridade_id'),
            'status_id'  => $this->request->getVar('status_id'),
            'pessoa_id'  => $this->request->getVar('pessoa_id'),
        ];
        $model->insert($data);
        return $this->response->redirect(site_url('/'));
    }
}

?>