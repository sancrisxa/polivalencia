<?php
class Consulta extends model 
{
	public function getAll() 
	{
		$array = array();

		$sql = "SELECT funcionarios.nome as funcionario, postos_trabalho.nome as trabalho, habilitacoes.habilitado, habilitacoes.validade 
				FROM habilitacoes 
				INNER JOIN funcionarios ON habilitacoes.id_funcionario = funcionarios.id 
				INNER JOIN postos_trabalho ON habilitacoes.id_posto_trabalho = postos_trabalho.id 
				WHERE postos_trabalho.nome ='Sao Paulo' AND habilitacoes.habilitado = 1 AND validade > DATE_ADD(NOW(), INTERVAL 1 MONTH)";

		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
    }
}