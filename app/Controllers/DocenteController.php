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

	//Vista principal del modulo docente
	function index(){
		$docente = new DocenteModel();
		$datos = $docente->listar();
		require_once('Views/Docente/index.php');
	}

	//Funcion de busqueda por nombre o apellido o cédula
	function busqueda(){
		$docente = new DocenteModel();
		
		if(isset($_POST['buscar'])){
			$buscar = $_POST['buscar'];
			if($docente->buscar_doc($buscar)){
				echo "existe";
				$datos = $docente->buscar_doc();
				echo $datos;
				require_once('Views/Docente/index.php');
			}
			else{
				echo "no existe";
				require_once('Views/Docente/index.php');
			}
		}
		else{
			echo "no hay nada";
			require_once('Views/Docente/index.php');
		}
		require_once('Views/Docente/index.php');
	}


	//Funcion para agregar un docente a la BD
	function add(){
		require_once('Views/Docente/add.php');
	}


	//Funcion que trae los datos del form de registro
	function save(){ 
		
		$docente = new DocenteModel();
		if(isset($_POST['correo']) && isset($_POST['contrasenia']) && isset($_POST['nombre']) && isset($_POST['apellido'])&& isset($_POST['cedula'])){
		$correo = $_POST['correo'];
		$password = $_POST['contrasenia'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];

		if($docente->insert_user($correo, $password, $nombre, $apellido, $cedula)){
			$Registerexitoso = "Registro exitoso";
			require_once('Views/Docente/add.php');
		}
		else{
			$Registerexitoso = "El usuario ya existe";
			require_once('Views/Docente/add.php');
		}
	}
	}


	//Funcion que permite al admin editar y ver informacion de los docentes
	function editar_otro(){
		
		$docente = new DocenteModel();
		if(isset($_POST['cedula'])){
			$cedula = $_POST['cedula'];
		echo $cedula;
		if($docente->consultar($cedula));
		$datos = $docente->listar();
		require_once('Views/Docente/info.php');
		}
		else{
			require_once('Views/Docente/info.php');
		}
	}
	/* function error(){
		require_once('Views/Docente/error.php');
	} */
	function edit(){
		require_once('Views/Docente/edit.php');
	}
}
?>
