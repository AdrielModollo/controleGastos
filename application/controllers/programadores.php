<?php
class Programadores extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("usuario_logado")){
			redirect("inicio/index");
	}
		$this->load->model("programadores_model");
	}

	public function programador () {
	 if($this->session->userdata("usuario_logado")) {
        $programadores = $this->programadores_model->buscaTodos();

        $dados = array("programadores" => $programadores);

		$this->load->view("programadores/programador.php", $dados);
	} else {
		redirect("inicio/index", "refresh");
		}
	}

	public function cadastroProgramador() {
			$programador = array(
				"Nome" => $this->input->post("Nome"),
			);
			
			$this->programadores_model->salva($programador);
			$this->load->view("programadores/programador.php");

			redirect("programadores/programador", "refresh");
		}

}
