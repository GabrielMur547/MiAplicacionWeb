<?php
class DocenteModel{
    private $db;
    private $docentes;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->docentes = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from docentes;");
        while($filas = $consulta->fetch_assoc()){
            $this->docentes[] = $filas;
        }
        return $this->docentes;
    }
    public function buscar_doc($buscar){
        $consulta = $this->db->query("select * from docentes WHERE primer_nombre = '$buscar' OR primer_apellido = '$buscar' OR cedula LIKE '$buscar';");
        while($filas = $consulta->fetch_assoc()){
            $this->docentes[] = $filas;
        }
        return $this->docentes;
    }
    public function consultar(){ //Esto debe agarrar el ID del usuario actual y ver su propia información
        $consulta = $this->db->query("select $user_current from docentes;"); //No sé como se llama la variable donde tienes el id o nombre del usuario actual guardado
            $this->docentes[] = $filas;
        }
        return $this->docentes;}

    public function insert_user($correo, $pass, $nom, $ape, $cedu){
        $consultar = "SELECT * FROM registrar WHERE correo = '$correo';";
        $result = $this->db->query($consultar);

        if(mysqli_num_rows($result)==0){
            $insert_user = $this->db->query("insert into registrar (primer_nombre, primer_apellido, cedula, correo, contrasenia, tipo) VALUES ('$nom', '$ape', '$cedu', '$correo', '$pass', '1');");
            return true;
        }
        else{
            return false;
        }
    
    }   

    public function update_user($primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cedula, $fecha_nac, $estado_civil, $tipo_sangre,$telefono_casa,$celular,$provincia_res,$distrito_res,$corregimiento_res,$direccion_especif, $categoria_doc, $ubicacion_cede, $depto, $correo, $genero){    
        $insert_user = $this->db->query("UPDATE docente SET (primer_nombre='$primer_nombre', 
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
                                                             genero='$genero') WHERE cedula=$user_current;"); //Colocar usuario actual    
    }
}

?>