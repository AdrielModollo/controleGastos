<?php
class Projetos extends CI_Controller{

public function __construct(){
	parent::__construct();
	if(!$this->session->userdata("usuario_logado")){
		redirect("inicio/index", "refresh");
	}

	$this->load->model("projetos_model");
}

	public function projeto () {
        $projetos = $this->projetos_model->buscaTodos();

        $dados = array("projetos" => $projetos);

		$this->load->view("projetos/projeto.php", $dados);
	} 

	public function cadastroProjeto() {
			$projeto = array(
				"Nome" => $this->input->post("Nome"),
				"Descricao" => $this->input->post("Descricao"),
			);
			
			$this->projetos_model->salva($projeto);
			$this->load->view("projetos/projeto.php");

			redirect("projetos/projeto", "refresh");
		}

		
}
