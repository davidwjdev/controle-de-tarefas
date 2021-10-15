<?php

namespace App\Controllers;

use App\Models\TarefaModel;
use App\Models\PessoaModel;
use App\Models\PrioridadeModel;
use App\Models\StatusModel;

class TarefasController extends BaseController
{
    //exibir lista de tarefas
    public function index()
    {
        //conexao
        $db = db_connect();
        // query para retornar os dados
        $data = $db->query('select tar.tarefa_id, tar.nome as nome_tarefa, pri.nome as nome_prioridade, sta.nome as nome_status, pes.nome as nome_pessoa
         from  tarefas tar
         inner join prioridades pri on tar.prioridade_id = pri.prioridade_id
         inner join status sta on tar.status_id = sta.status_id
         inner join pessoas pes on tar.pessoa_id = pes.pessoa_id order by tar.prioridade_id,tar.status_id DESC')->getResultArray();
        return view('tarefas/index', ['tarefas' => $data]);
    }
    //criar nova tarefa
    public function create()
    {
        //retorna lista de prioridades no combobox do form
        $prioridadeModel = new PrioridadeModel();
        $prioridades['prioridades'] = $prioridadeModel->findAll();
        //retorna lista de status no combobox do form
        $statusModel = new StatusModel();
        $status['status'] = $statusModel->findAll();
        //retorna lista de pessoas no combobox do form
        //  $pessoaModel = new PessoaModel();
        //  $pessoas['pessoas'] = $pessoaModel->findAll();
        $db = db_connect();
        $pessoas['pessoas'] = $db->query("select 
        if(count(1) < 3, 'Y','N') as valido, tar.pessoa_id, pes.nome from tarefas tar
        inner join pessoas pes
        on tar.pessoa_id=pes.pessoa_id
        where tar.status_id in (1,2)
        group by tar.pessoa_id, pes.nome")->getResultArray();

        return view('tarefas/create',['prioridades' => $prioridades,'status' => $status, 'pessoas' => $pessoas]);
    }
    // salva dados do form no banco
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
    // edita os dados
    public function edit($id = null)
    {
        //retorna lista de prioridades no combobox do form
        $prioridadeModel = new PrioridadeModel();
        $prioridades['prioridades'] = $prioridadeModel->findAll();
        //retorna lista de status no combobox do form
        $statusModel = new StatusModel();
        $status['status'] = $statusModel->findAll();
        //retorna lista de pessoas no combobox do form
        $db = db_connect();
        $pessoas['pessoas'] = $db->query("select 
        if(count(1) < 3, 'Y','N') as valido, tar.pessoa_id, pes.nome from tarefas tar
        inner join pessoas pes
        on tar.pessoa_id=pes.pessoa_id
        where tar.status_id in (1,2)
        group by tar.pessoa_id, pes.nome")->getResultArray();

        $tarefaModel = new TarefaModel();
        $tarefa = $tarefaModel->where('tarefa_id',$id)->first();

        return view('tarefas/edit',['tarefa' => $tarefa,'prioridades' => $prioridades ,'status' => $status, 'pessoas' => $pessoas]);
    }

    // salva os dados editados
    public function update()
    {
            $tarefaModel = new TarefaModel();
            $tarefa_id = $this->request->getVar('tarefa_id');
            $data = [
                'nome' => $this->request->getVar('nome'),
                'prioridade_id'  => $this->request->getVar('prioridade_id'),
                'status_id'  => $this->request->getVar('status_id'),
                'pessoa_id'  => $this->request->getVar('pessoa_id'),
            ];
            $tarefaModel->update($tarefa_id, $data);
            return $this->response->redirect(site_url('/'));  
    }

    //apaga a tarefa 
    public function destroy($id = null){
        $tarefaModel = new TarefaModel();
        $data['tarefa'] = $tarefaModel->where('tarefa_id', $id)->delete($id);
        return $this->response->redirect(site_url('/'));
    }  

}

?>