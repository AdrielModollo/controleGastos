<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("usuario_logado")) 
		{
			redirect("inicio/index", "refresh");
	}
		$this->load->model("usuarios_model");
	}
	

    public function cadastro() {
	    $usuario = array(
	        "nome" => $this->input->post("nome"),
	        "email" => $this->input->post("email"),
	        "senha" => md5($this->input->post("senha"))
	    );
	    
        $this->usuarios_model->salva($usuario);
		$this->load->view("usuarios/cadastro.php");
		
	}
	
}
