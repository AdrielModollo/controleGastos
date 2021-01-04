<?php
class Sistemas_model extends CI_Model {
	public function buscaTodos() {
        $this->db->select('s.Codigo, pj.Nome as Projeto, p.Nome as Programador,');
        $this->db->select('c.Nome as Cliente');
        $this->db->from('sistema s');
        $this->db->join('projetos pj', 'pj.codigo = s.idProjeto');
        $this->db->join('programador p', 'p.codigo = s.idProgramador');
        $this->db->join('clientes c', 'c.codigo = s.cliente_Codigo');
        $this->db->join('tarefas t', 't.codigo = s.idProjeto');
        $this->db->where('t.StatusSistema = 1');
        $sistemas = $this->db->get()->result_array();

        return $sistemas;
    }

    public function registrosAtivos() {
        $this->db->select('count(t.StatusSistema) as Registros');
        $this->db->from('sistema s');
        $this->db->join('tarefas t', 't.codigo = s.idProjeto');
        $this->db->where('t.StatusSistema = 1');
        $registros = $this->db->get()->result_array();

        return $registros;
    }

    
    public function excluir($Codigo)
    {
        $this->db->where('Codigo', $Codigo);
        $sql =  $this->db->delete('sistema');
       
        return $sql;       
    }


    /*   
    SELECT pj.nome as 'Projeto Nome', p.nome as 'Programador', c.nome as 'Cliente',  count(c.codigo) as 'Registros Ativos' 
FROM sistema s
inner join projetos pj on pj.codigo = s.idProjeto
inner join programador p on p.codigo = s.idProgramador
inner join clientes c on c.codigo = s.cliente_Codigo
where status like 'ativo%'; 
*/
    public function salva($sistema) {
    	$this->db->insert("sistema", $sistema);
 	}
}
