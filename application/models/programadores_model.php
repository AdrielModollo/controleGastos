<?php
class Programadores_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("programador")->result_array();
    }

    public function salva($programador) {
    	$this->db->insert("programador", $programador);
     }
     
       function buscaCodigoNome(){
        $query = $this->db->query('SELECT codigo,nome FROM programador');
        $programadores = $query->result_array();
        
        $programadoresMapeado = [];  
        
        foreach ($programadores as $programador) {  
            $programadoresMapeados[$programador['codigo']] = $programador['nome']; 
        }

        return $programadoresMapeados;
    }
}
