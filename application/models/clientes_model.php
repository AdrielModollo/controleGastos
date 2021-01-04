<?php

class Clientes_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("clientes")->result_array();
    }

    function buscaCodigoNome(){
        $query = $this->db->query('SELECT codigo,nome FROM clientes');
        $clientes = $query->result_array();
        
        $clientesMapeados = [];  
        
        foreach ($clientes as $cliente) {  
            $clientesMapeados[$cliente['codigo']] = $cliente['nome']; 
        }

        return $clientesMapeados;
    }

    public function salva($cliente) {
    	$this->db->insert("clientes", $cliente);
     }

     public function excluir($Codigo)
     {
         $this->db->where('Codigo', $Codigo);
         $sql =  $this->db->delete('clientes');
        
         return $sql;       
     }

     public function atualizar($Codigo)

     {
         $this->db->where('Codigo', $Codigo);
         $query = $this->db->get('clientes');
         return $query->row();
     }

    public function updateC($data, $Codigo)
    {
    $this->db->where('Codigo', $Codigo);
    $this->db->update('clientes',$data); 
    }
     
 
}
