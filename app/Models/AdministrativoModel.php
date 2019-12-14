<?php
class AdministrativoModel{
    private $db;
    private $administrativos;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->administrativos = array();
    }


    //Hace una consulta a la BD y muestra todos los usuarios administrativos
    public function listar(){
        $consulta = $this->db->query("select * from administrativos;");
        while($registros = $consulta->fetch_assoc()){
            $this->administrativos[] = $registros;
        }
        return $this->administrativos;
    }
}

?>