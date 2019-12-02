<?php

class Conexion
{

    public static function conectar()
    {
        $conexion = new mysqli("mysql", "root", "clave123", "Secretaria_Administrativa");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}

?>