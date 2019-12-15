<?php
require_once ('Controllers/UserSessionController.php');
class PerfilModel{
    private $db;
 
    public function __construct(){
        $this->db = Conexion::conectar();
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Rescata el ID del usuario para manejarlo durante la sesión
    public function id(){
        
    }




/////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Obtiene los datos del form de actualizacion de perfil
    public function update_perfil(  $primer_nombre, 
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
                                    $categoria_doc, 
                                    $ubicacion_cede, 
                                    $depto, 
                                    $correo, 
                                    $genero){ 

        $consultar = "SELECT * FROM docentes WHERE cedula = '$cedula';";
            $result = $this->db->query($consultar);

            if(mysqli_num_rows($result)>0){
                $insert_user = $this->db->query("UPDATE docentes SET (primer_nombre='$primer_nombre', 
                                                                    segundo_nombre='$segundo_nombre', 
                                                                    primer_apellido='$primer_apellido', 
                                                                    segundo_apellido='$segundo_apellido', 
                                                                    cedula='$cedula', 
                                                                    fecha_nac='$fecha_nac', 
                                                                    estado_civil='$estado_civil', 
                                                                    tipo_sangre='$tipo_sangre',
                                                                    telefono_csa='$telefono_casa',
                                                                    celular='$celular',
                                                                    provincia_res='$provincia_res',
                                                                    distrito_res='$distrito_res',
                                                                    corregimiento_res='$corregimiento_res',
                                                                    direcion_especif'$direccion_especif', 
                                                                    categoria_doc='$categoria_doc', 
                                                                    ubicacion_cede='$ubicacion_cede', 
                                                                    depto='$depto', 
                                                                    correo='$correo', 
                                                                    genero='$genero') WHERE cedula=$cedula;"); //Colocar usuario actual    
                return true;
            }
            else{
                return false;
            }
    }






////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Realiza los insert de los familiares
    public function insert_familiar($parentezco,
    $nombre_fam,
    $apellido_fam,
    $fecha_nac_fam,
    $prioridad,
    $telef_casa_fam,
    $telef_ofi_fam,
    $celular_fam,
    $correo_fam){
        $consultar = "SELECT * FROM docentes WHERE id_docente = '$id';";
        $result = $this->db->query($consultar);

        if(mysqli_num_rows($result)>0){
            $insert = $this->db->query("insert into familiar_doc (parentezco, nombre_fam, apellido_fam, fecha_nac_fam, prioridad, telef_casa_fam, telef_ofi_fam, celular_fam, correo_fam, docentes_id_docente) 
            values('$parentezco', 
            '$nombre_fam', 
            '$apellido_fam', 
            '80-01-21',  
            '$prioridad', 
            '$telef_casa_fam', 
            '$telef_ofi_fam', 
            '$celular_fam',
            '$correo_fam', 
            '$id');");
            return true;
        }
        else{
            return false;
        }

    }





    
///////////////////////////////////////////////////////////////////////////////////////////////////////
    //Insert de las preparaciones del docente
    public function insert_preparacion($titulo,
    $anio,
    $universidad,
    $nivel){
        require_once ('Controllers/UserSessionController.php');
        $user = $_SESSION['user'];
        $resultado = $this->db->query("select * from docentes where correo = '$user';");
        $id = $resultado->fetch_assoc();

        $consultar = "SELECT * FROM docentes WHERE id_docente = '6';";
        $result = $this->db->query($consultar);

        if(mysqli_num_rows($result)==0){
            $insert = $this->db->query("insert into preparacion_academica_doc(titulo, anio, universidad, nivel, docentes_id_docente) 
            values('$titulo', '$anio', '$universidad', '$nivel', '6');");
            return true;
        }
        else{
            return false;
        }

    }
}   

?>