<?php
class Funcionario extends model 
{
	public function getAll() 
	{
		$array = array();

		$sql = "SELECT * FROM funcionarios";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function add($nome, $nascimento, $cidade, $telefone) {

			$sql = "INSERT INTO funcionarios (nome, data_nascimento, cidade, telefone) VALUES (:nome, :nascimento, :cidade, :telefone)";
			$sql = $this->db->prepare($sql);
			var_dump($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':nascimento', $nascimento);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':telefone', $telefone);
			return $sql->execute();
			
	}
}