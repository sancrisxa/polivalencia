<?php
class Habilitacao extends model 
{

	public function getAll() 
	{
		$array = array();

		$sql = "SELECT habilitacoes.id, funcionarios.nome as 'Nome Funcionarios', funcionarios.cidade, funcionarios.data_nascimento, postos_trabalho.nome as 'Posto Trabalho',habilitacoes.validade, habilitacoes.habilitado 
				FROM habilitacoes 
				INNER JOIN funcionarios ON habilitacoes.id_funcionario = funcionarios.id 
				INNER JOIN postos_trabalho ON habilitacoes.id_posto_trabalho = postos_trabalho.id";
				
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function add($funcionario, $trabalho, $habilitado, $validade) {

		$sql = "INSERT INTO habilitacoes (id_funcionario, id_posto_trabalho, habilitado, validade) VALUES (:id_funcionario, :id_posto_trabalho, :habilitado, :validade)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_funcionario', $funcionario);
		$sql->bindValue(':id_posto_trabalho', $trabalho);
		$sql->bindValue(':habilitado', $habilitado);
		$sql->bindValue(':validade', $validade);
		return $sql->execute();
		
	}

}