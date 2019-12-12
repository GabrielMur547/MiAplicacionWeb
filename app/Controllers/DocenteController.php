<?php 
/**
* 
*/
require_once ('Models/DocenteModel.php');

class DocenteController
{
	
	function __construct()
	{
		
	}

	function index(){
		$docente = new DocenteModel();
		$datos = $docente->listar();
		require_once('Views/Docente/index.php');
	}

	function busqueda(){
		$docente = new DocenteModel();
		$datos = $docente->buscar_doc();
		require_once('Views/Docente/index.php');
	}

	function add(){
		require_once('Views/Docente/add.php');
	}

	function save(){ 
		
		$docente = new DocenteModel();
		if(isset($_POST['correo']) && isset($_POST['contrasenia']) && isset($_POST['nombre']) && isset($_POST['apellido'])&& isset($_POST['cedula'])){
		$correo = $_POST['correo'];
		$password = $_POST['contrasenia'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];

		if($docente->insert_user($correo, $password, $nombre, $apellido, $cedula)){
		require_once('Views/Docente/index.php');
		}
		else{
			$errorRegister = "El usuario ya existe";
			require_once('Views/Docente/add.php');
		}
	}
	}
	/* function error(){
		require_once('Views/Docente/error.php');
	} */

}
?>
