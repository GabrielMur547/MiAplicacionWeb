<?php

require_once('Models/UserModel.php');
require_once('Controllers/UserSessionController.php');
class UserController
{
    function __construct()
    {

    }

    function verify()
    {
        $userSession = new UserSessionController();
        $user = new UserModel();

        if(isset($_SESSION['user'])){
            //echo "hay sesion";
            $user->setUser($userSession->getCurrentUser());
            require_once('Views/Layouts/layout.php');

        }else if(isset($_POST['username']) && isset($_POST['password'])){
            
            $userForm = $_POST['username'];
            $passForm = $_POST['password'];

            $user = new UserModel();
            if($user->userExists($userForm, $passForm)){
                //echo "Existe el usuario";
                $userSession->setCurrentUser($userForm);
                $user->setUser($userForm);

                require_once('Views/Layouts/layout.php');
            }else{
                //echo "No existe el usuario";
                $errorLogin = "Nombre de usuario y/o password incorrecto";
                require_once('Views/User/login.php');
            }
        }else{
            //echo "login";
            require_once('Views/User/login.php');
        }
    }
}
?>
