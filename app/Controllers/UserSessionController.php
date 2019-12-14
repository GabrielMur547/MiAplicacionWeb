<?php

class UserSessionController{

   /* public function __construct(){
        session_start();
    }*/


    //Obtiene el usuario current durante sesion
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }


    //Envia el usuario current durante sesion
    public function getCurrentUser(){
        return $_SESSION['user'];
    }


    //Cierra la sesión
    public function closeSession(){
        session_unset();
        session_destroy();
        require_once('Views/User/login.php');
    }
}

?>