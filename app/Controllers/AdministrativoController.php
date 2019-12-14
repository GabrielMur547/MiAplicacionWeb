<?php 
/**
* 
*/
require_once('Models/AdministrativoModel.php');

class AdministrativoController
{

	function __construct()
	{

	}

	//Vista principal del modulo administrativo
	function index(){
		$administrativo = new AdministrativoModel();
		$datos = $administrativo->listar();
		require_once('Views/Administrativo/index.php');
	}

}
