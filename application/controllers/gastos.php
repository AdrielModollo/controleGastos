<?php
class Tarefas extends CI_Controller{
    
    public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("usuario_logado")) {
			redirect("inicio/index", "refresh");
		}

		$this->load->model('tarefas_model');   
		$this->load->model('projetos_model');
		$this->load->model('clientes_model'); 
		$this->load->model('linguagens_model');     
    }

	public function listarTarefas () {
        $tarefas = $this->tarefas_model->buscaTodos();

        $dados = array("tarefas" => $tarefas);
		$this->load->view("tarefas/listarTarefas.php", $dados);
	} 

    public function formulario() {
		$projetos = $this->projetos_model->buscaCodigoNome();
		$clientes = $this->clientes_model->buscaCodigoNome();
		$linguagens = $this->linguagens_model->buscaCodigoNome();
		
	
		$dados = array(
			"projetos" => $projetos,
			"clientes" => $clientes,
			"linguagens" => $linguagens
		);
		
		$this->load->view("tarefas/formulario", $dados);
	
    }

    public function novo(){
	    $tarefa = array(
	        "Nome" => $this->input->post("Nome"),
	        "Comando" => $this->input->post("Comando"),
			"Periodicidade" => $this->input->post("Periodicidade"),
			"Horario" => $this->input->post("Horario"),
	        "QuantidadeMinutosEsperadoExecucao" => $this->input->post("QuantidadeMinutosEsperadoExecucao"),
			"StatusTarefa" => $this->input->post("StatusTarefa"),
			"StatusSistema" => $this->input->post("StatusSistema"),
			"idProjeto" => $this->input->post("idProjeto"),
			"idCliente" => $this->input->post("idCliente"),
			"idLinguagem" => $this->input->post("idLinguagem"),
	    );
	    	    
		$this->load->model("tarefas_model");
	    $this->tarefas_model->salva($tarefa);
	    $this->session->set_flashdata("success", "tarefa salva com sucesso");

	    redirect("tarefas/listarTarefas");
	}
}
