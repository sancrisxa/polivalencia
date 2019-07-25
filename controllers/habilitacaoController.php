<?php
class habilitacaoController extends controller
{
	public function index() 
	{
		$dados = array();

		$habilitacao = new Habilitacao();
		$dados['lista'] = $habilitacao->getAll();

		$this->loadTemplate('habilitacao', $dados);
	}

	public function add() 
	{
		$dados = array(
			'error' => ''
		);

		$funcionario = new Funcionario();
		$dados['funcionarios'] = $funcionario->getAll();

		$postoTrabalho = new PostoTrabalho();
		$dados['postosTrabalho'] = $postoTrabalho->getAll();

		if (!empty($_GET['error'])) {
			$dados['error'] = $_GET['error'];
		}

		$this->loadTemplate('add_habilitacao', $dados);
	}

	public function add_save() 
	{
		if(
			!empty($_POST['funcionario']) && 
			!empty($_POST['trabalho']) && 
			!empty($_POST['habilitado']) && 
			!empty($_POST['validade'])
		) {
			$funcionario = $_POST['funcionario'];
			$trabalho = $_POST['trabalho'];
			$habilitado = $_POST['habilitado'] != "1"? "0" : $_POST['habilitado'];
			$validade = $_POST['validade'];

			$habilitacao = new Habilitacao();
			if($habilitacao->add($funcionario, $trabalho, $habilitado, $validade)) {
				header("Location: ".BASE_URL.'habilitacao');
			} else {
				header("Location: ".BASE_URL.'habilitacao/add');
			}			
		} else {
			header("Location: ".BASE_URL.'habilitacao/add');
		}
	}
}