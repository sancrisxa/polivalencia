<?php
class PostoTrabalho extends model 
{
	public function getAll() 
	{
		$array = array();

		$sql = "SELECT * FROM postos_trabalho";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function add($nome, $setor, $tipo) 
	{
		$sql = "INSERT INTO postos_trabalho (nome, setor, tipo) VALUES (:nome, :setor, :tipo)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':setor', $setor);
		$sql->bindValue(':tipo', $tipo);

		return $sql->execute();	
	}
}