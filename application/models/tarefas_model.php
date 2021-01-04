<?php
class Tarefas_model extends CI_Model {
	public function buscaTodos() {
        $this->db->select('t.Codigo, t.Nome, t.Comando,');
        $this->db->select('t.Periodicidade, t.Horario, t.QuantidadeMinutosEsperadoExecucao,');
        $this->db->select('t.StatusTarefa, t.StatusSistema, t.DataCadastro,');
        $this->db->select('c.nome as Cliente, l.nome as Linguagem, pj.nome as Projeto');    
        $this->db->from('tarefas t');
        $this->db->join('clientes c', 'c.codigo = t.idCliente');
        $this->db->join('projetos pj', 'pj.codigo = t.IdProjeto');
        $this->db->join('linguagens l', 'l.codigo = t.idLinguagem');
        $this->db->order_by('t.Codigo');
        $tarefas = $this->db->get()->result_array();
        
        return $tarefas;
    }

    public function salva($tarefa) {
    	$this->db->insert("tarefas", $tarefa);
 	}
}
