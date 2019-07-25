<?php
class consultaController extends controller 
{

	public function index() 
	{
		$dados = array();

		$consulta = new Consulta();
		$dados['lista'] = $consulta->getAll();

		$this->loadTemplate('consulta', $dados);
	}

}