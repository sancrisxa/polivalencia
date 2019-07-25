<?php
class homeController extends controller 
{
	public function index() 
	{
		$dados = array();

		$funcionario = new Funcionario();
		$dados['lista'] = $funcionario->getAll();

		$this->loadTemplate('home', $dados);
	}
}