<?php

class UserModel{
    private $db;
    private $nombre;
    private $username;

    public function __construct(){
        $this->db = Conexion::conectar();
    }

    public function userExists($user, $pass){
        //$md5pass = md5($pass);
        $consultar = "SELECT * FROM registrar WHERE correo = '$user'AND contrasenia = '$pass';";
        $result = $this->db->query($consultar);

        if(mysqli_num_rows($result)>0){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $consultar = "SELECT * FROM registrar WHERE correo = '$user'AND contrasenia = '$pass';";
        $result = $this->db->query($consultar);
        
        foreach ($result as $currentUser) {
            $this->nombre = $currentUser['primer_nombre'];
            $this->username = $currentUser['primer_apellido'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>