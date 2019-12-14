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

	function add(){
		require_once('Views/Docente/add.php');
	}

	function update(){
		$docente = new DocenteModel();
		$datos = $docente->consultar();
		require_once('Views/Perfil/actualizar.php');
	}

	function save_update(){
		$docente = new DocenteModel();
		if(isset($_POST['correo']) && isset($_POST['contrasenia']) && isset($_POST['nombre']) && isset($_POST['apellido'])&& isset($_POST['cedula'])){
		$primer_nombre = $_POST['primer_nombre'];
		$segundo_nombre = $_POST['segundo_nombre'];
		$primer_apellido = $_POST['primer_apellido'];
		$segundo_apellido = $_POST['segundo_apellido'];
		$cedula = $_POST['cedula'];
		$fecha_nac = $_POST['fecha_nac'];
		$estado_civil = $_POST['estado_civil'];
		$tipo_sangre = $_POST['tipo_sangre'];
		$telefono_casa = $_POST['telefono_casa'];
		$celular = $_POST['celular'];
		$provincia_res = $_POST['provincia_res'];
		$distrito_res = $_POST['distrito_res'];
		$corregimiento_res = $_POST['corregimiento_res'];
		$direccion_especif = $_POST['direccion_especif'];
		$categoria_doc = $_POST['categoria_doc'];
		$ubicacion_cede = $_POST['ubicacion_cede'];
		$depto = $_POST['depto'];
		$correo = $_POST['correo'];
		$genero = $_POST['genero'];

		if($docente->update_user($primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cedula, $fecha_nac, $estado_civil, $tipo_sangre,$telefono_casa,$celular,$provincia_res,$distrito_res,$corregimiento_res,$direccion_especif, $categoria_doc, $ubicacion_cede, $depto, $correo, $genero)){
		require_once('Views/Docente/index.php');
		}
		else{
			$errorRegister = "El usuario ya existe";
			require_once('Views/Docente/add.php');
		}
	}
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
