<?php
class Sistemas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("usuario_logado")){
			redirect("inicio/index", "refresh");
		}
	
		$this->load->model("sistemas_model");
		$this->load->model('programadores_model');   
		$this->load->model('projetos_model');
		$this->load->model('clientes_model');
		$this->load->model('tarefas_model');      
	}

	public function sistema () {
		$sistemas = $this->sistemas_model->buscaTodos();

        $dados = array("sistemas" => $sistemas);
		$this->load->view("sistemas/sistema.php", $dados);		
	} 

	public function registro () {
		$registros = $this->sistemas_model->registrosAtivos();

        $dados = array("registrosAtivos" => $registrosAtivos);
		$this->load->view("sistemas/sistema.php", $dados);		
	} 


	public function formulario() {
	$projetos = $this->projetos_model->buscaCodigoNome();
	$clientes = $this->clientes_model->buscaCodigoNome();
	$programador = $this->programadores_model->buscaCodigoNome();
	

	$dados = array(
		"projetos" => $projetos,
		"clientes" => $clientes,
		"programador" => $programador
		);
	
	$this->load->view("sistemas/formulario.php", $dados);
	
	}

	public function novo(){
	    $sistema = array(
			"idProjeto" => $this->input->post("idProjeto"),
			"cliente_Codigo" => $this->input->post("cliente_Codigo"),
			"idProgramador" => $this->input->post("idProgramador"),
	    );
	    	    
		$this->load->model("sistemas_model");
	    $this->sistemas_model->salva($sistema);
	    $this->session->set_flashdata("success", "tarefa salva com sucesso");

	    redirect("sistemas/sistema");
	}

	public function delete($Codigo) {
		$this->sistemas_model->excluir($Codigo);
		$this->load->view("sistemas/sistema.php");
		

		redirect("sistemas/sistema", "refresh");
		}

}


