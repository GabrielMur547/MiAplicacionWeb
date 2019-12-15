<?php

require_once ('Models/PerfilModel.php');
class PerfilController
{
	function __construct()
	{
		
	}


////////////////////////////////////////////////////////////////////////////////////////////////////////
	//Hace el update a la tabla de docente durante la actualizacion de perfil
    function Actualizar(){
		$actualizar = new PerfilModel();
		if(isset($_POST['primer_nombre']) && isset($_POST['primer_apellido']) && isset($_POST['segundo_nombre']) && isset($_POST['segundo_apellido'])&& isset($_POST['cedula'])&& isset($_POST['fecha_nac'])&& isset($_POST['estado_civil'])&& isset($_POST['tipo_sangre'])&& isset($_POST['telefono_casa']) && isset($_POST['celular']) && isset($_POST['provincia_res']) && isset($_POST['distrito_res'])&& isset($_POST['corregimiento_res'])&& isset($_POST['direccion_especif'])&& isset($_POST['categoria_doc'])&& isset($_POST['ubicacion_sede'])&& isset($_POST['depto'])&& isset($_POST['correo'])&& isset($_POST['genero'])){
	
			$primer_nombre = $_POST['primer_nombre'];
			$primer_apellido = $_POST['primer_apellido'];
			$segundo_nombre = $_POST['segundo_nombre']; 
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
			$categria_doc = $_POST['categoria_doc'];
			$ubicacion_sede = $_POST['ubicacion_sede'];
			$depto = $_POST['depto'];
			$correo = $_POST['correo'];
			$genero = $_POST['genero'];

			/*echo $primer_nombre, 
			$primer_apellido, 
			$segundo_nombre, 
			$segundo_apellido,
			$cedula,
			$fecha_nac,
			$estado_civil,
			$tipo_sangre,
			$telefono_casa,
			$celular,
			$provincia_res,
			$distrito_res,
			$corregimiento_res,
			$direccion_especif,
			$categria_doc,
			$ubicacion_sede,
			$depto,
			$correo,
			$genero;*/

				if($actualizar->update_perfil($primer_nombre, 
				$primer_apellido, 
				$segundo_nombre, 
				$segundo_apellido,
				$cedula,
				$fecha_nac,
				$estado_civil,
				$tipo_sangre,
				$telefono_casa,
				$celular,
				$provincia_res,
				$distrito_res,
				$corregimiento_res,
				$direccion_especif,
				$categria_doc,
				$ubicacion_sede,
				$depto,
				$correo,
				$genero,)){
					echo "cambiado";
				require_once('Views/Home/index.php');
				}
				else{
					echo "ya existe";
					//$errorRegister = "El usuario ya existe";
					require_once('Views/Home/index.php');
				}
		}
		else{
			//echo "no enccontro registros";
			require_once('Views/Perfil/Actualizar.php');
		}
	}



//////////////////////////////////////////////////////////////////////////////////////////////////////////
	//Obtiene la informacion del form de insertar familiar
	function Familiar(){ 	
		$familiar = new PerfilModel();
		if(isset($_POST['parentezco'])
		&& isset($_POST['nombre_fam']) 
		&& isset($_POST['apellido_fam']) 
		&& isset($_POST['fecha_nac_fam']) 
		&& isset($_POST['prioridad'])
		&& isset($_POST['telef_casa_fam'])
		&& isset($_POST['telef_ofi_fam'])
		&& isset($_POST['celular_fam'])
		&& isset($_POST['correo_fam'])){

			$parentezco = $_POST['parentezco'];
			$nombre_fam = $_POST['nombre_fam'];
			$apellido_fam = $_POST['apellido_fam'];
			$fecha_nac_fam = $_POST['fecha_nac_fam'];
			$prioridad = $_POST['prioridad'];
			$telef_casa_fam = $_POST['telef_casa_fam'];
			$telef_ofi_fam = $_POST['telef_ofi_fam'];
			$celular_fam = $_POST['celular_fam'];
			$correo_fam = $_POST['correo_fam'];

			/*echo $parentezco,
			$nombre_fam,
			$apellido_fam,
			$fecha_nac_fam,
			$prioridad,
			$telef_casa_fam,
			$telef_ofi_fam,
			$celular_fam,
			$correo_fam;*/

				if($familiar->insert_familiar($parentezco,
				$nombre_fam,
				$apellido_fam,
				$fecha_nac_fam,
				$prioridad,
				$telef_casa_fam,
				$telef_ofi_fam,
				$celular_fam,
				$correo_fam)){
				echo "insertado";
				require_once('Views/Home/index.php');
				}
				else{
					echo "no insertado";
					require_once('Views/Perfil/Familiar.php');
				}
		}
		else{
		//echo "no encontro registros";
		require_once('Views/Perfil/Familiar.php');
		}
	}



//////////////////////////////////////////////////////////////////////////////////////////////////////////
	//Obtiene los datos del form de insertar preparacion
	function Preparacion(){
		require_once('Views/Perfil/Preparacion.php');
		$preparacion = new PerfilModel();
		if(isset($_POST['titulo'])
		&& isset($_POST['anio']) 
		&& isset($_POST['universidad']) 
		&& isset($_POST['nivel'])){
			$titulo = $_POST['titulo'];
			$anio = $_POST['anio'];
			$universidad = $_POST['universidad'];
			$nivel = $_POST['nivel'];

			/*echo $titulo,
			$anio,
			$universidad,
			$nivel;*/

				if($preparacion->insert_preparacion($titulo,
				$anio,
				$universidad,
				$nivel)){
					//echo  " mal";
				require_once('Views/Home/index.php');
				}
				else{
					//echo  " mal";
				$Listo = "Error al insertar la preparacion academica";
					require_once('Views/Perfil/Preparacion.php');
				}
		}
		else{
		//echo "no encontro registros";
		//require_once('Views/Perfil/Preparacion.php');
		}
	}
}