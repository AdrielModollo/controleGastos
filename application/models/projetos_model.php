<?php
class Projetos_model extends CI_Model {
    
    public function buscaTodos() {
        return $this->db->get("projetos")->result_array();
    }

    function buscaCodigoNome(){
        $query = $this->db->query('SELECT codigo,nome FROM projetos');
        $projetos = $query->result_array();
        
        $projetosMapeados = [];  
        
        foreach ($projetos as $projeto) {  
            $projetosMapeados[$projeto['codigo']] = $projeto['nome']; 
        }

        return $projetosMapeados;
    }

    public function salva($projeto) {
    	$this->db->insert("projetos", $projeto);
 	}
}
