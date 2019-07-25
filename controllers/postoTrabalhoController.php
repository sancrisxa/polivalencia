<?php
class postoTrabalhoController extends controller 
{
	public function index() 
	{
		$dados = array();

		$postoTrabalho = new PostoTrabalho();
		$dados['lista'] = $postoTrabalho->getAll();

		$this->loadTemplate('postoTrabalho', $dados);
	}

	public function add() 
	{
		$dados = array(
			'error' => ''
		);

		if(!empty($_GET['error'])) {
			$dados['error'] = $_GET['error'];
		}

		$this->loadTemplate('add_posto', $dados);
	}

	public function add_save() 
	{
		if(
			!empty($_POST['nome']) && 
			!empty($_POST['setor']) && 
			!empty($_POST['tipo'])
		) {

			$nome = $_POST['nome'];
			$setor = $_POST['setor'];
			$tipo = $_POST['tipo'];

			$postoTrabalho = new PostoTrabalho();
			if ($postoTrabalho->add($nome, $setor, $tipo)) {
				header("Location: ".BASE_URL.'postoTrabalho');
			} else {
				header("Location: ".BASE_URL.'postoTrabalho/add');
			}			
		} else {
			header("Location: ".BASE_URL.'postoTrabalho/add');
		}
	}
}