<?php

require_once ('Models/UserModel.php');
require_once ('Controllers/UserSessionController.php');

class UserController{

    public function verify()
    {
        
        $userSession = new UserSessionController();
        $user = new UserModel();

        if(isset($_SESSION['user'])){
            /*echo "hay sesion ";
            echo "Bienvenido ";
            echo $_SESSION['user'];*/
            $sesion =true;
            $user->setUser($userSession->getCurrentUser());
            
            require_once('Views/Home/index.php');
        } else if(isset($_POST['correo']) && isset($_POST['contrasenia'])){
            //echo "Validacion";
           
            $userForm = $_POST['correo'];
            $passForm = $_POST['contrasenia'];
            
            if($user->userExists($userForm, $passForm)){
                //echo "Existe el usuario";
                $userSession->setCurrentUser($userForm);
                $user->setUser($userForm);
                
            require_once('Views/Home/index.php');  
            }else{
                //echo "No existe el usuario";
                $errorLogin = "Nombre de usuario y/o password incorrecto";
                require_once('Views/User/login.php');
            }
        }else{
           // echo "login";
            require_once('Views/User/login.php');
        }
    }
}
?>


