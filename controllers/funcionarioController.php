<?php
class funcionarioController extends controller
{

	public function index() {}

	public function add() 
	{
		$dados = array(
			'error' => ''
		);

		if(!empty($_GET['error'])) {
			$dados['error'] = $_GET['error'];
		}

		$this->loadTemplate('add', $dados);
	}

	public function add_save() 
	{
		if (
			!empty($_POST['nome']) && 
			!empty($_POST['nascimento']) && 
			!empty($_POST['cidade']) && 
			!empty($_POST['telefone'])
		) {

			$nome = $_POST['nome'];
			$nascimento = $_POST['nascimento'];
			$cidade = $_POST['cidade'];
			$telefone = $_POST['telefone'];

			$funcionario = new Funcionario();
			if ($funcionario->add($nome, $nascimento, $cidade, $telefone)) {
				header("Location: ".BASE_URL);
			} else {
				header("Location: ".BASE_URL.'funcionario/add');
			}			
		} else {
			header("Location: ".BASE_URL.'funcionario/add');
		}
	}
}



















