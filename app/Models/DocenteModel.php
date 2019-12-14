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
}

?>