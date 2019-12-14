<?php
require_once ('Controllers/UserSessionController.php');
class PerfilModel{
    private $db;
 
    public function __construct(){
        $this->db = Conexion::conectar();
    }
    public function id(){
        $user = new UserSessionController();
        $id = $this->db->query("select id_docente from docentes where correo = '$user';");
    }
    public function update_perfil($primer_nombre, 
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
    public function insert_familiar($parentezco,
    $nombre_fam,
    $apellido_fam,
    $fecha_nac_fam,
    $localizar,
    $prioridad,
    $telef_casa_fam,
    $telef_ofi_fam,
    $celular_fam,
    $correo_fam){
        $consultar = "SELECT * FROM docentes WHERE id_docente = '$id';";
        $result = $this->db->query($consultar);

        if(mysqli_num_rows($result)>0){
            $insert = $this->db->query("insert into familiar_doc (parentezco,
            nombre_fam,
            apellido_fam,
            fecha_nac_fam,
            localizar,
            prioridad,
            telef_casa_fam,
            telef_ofi_fam,
            celular_fam,
            correo_fam,
            docentes_id_docente) VALUES ($parentezco,
            $nombre_fam,
            $apellido_fam,
            $fecha_nac_fam,
            $localizar,
            $prioridad,
            $telef_casa_fam,
            $telef_ofi_fam,
            $celular_fam,
            $correo_fam,
            '$id');");
            return true;
        }
        else{
            return false;
        }

    }
}   

?>