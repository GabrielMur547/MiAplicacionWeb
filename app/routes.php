<?php


$controllers = array(
    'Home' => ['index'],
    'Docente' => ['index', 'add', 'save'],
    'Administrativo' => ['index'],
    'User' => ['verify'],
    'UserSession' => ['setCurrentUser', 'getCurrentUser', 'closeSession'],
    'Perfil' => ['Actualizar', 'Familiar', 'Preparacion']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Home', 'index');
    }
} else {
    call('Home', 'index');
}

function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Home':
            $controller = new HomeController();
            break;
        case 'Docente':
            $controller = new DocenteController();
            break;
        case 'Administrativo':
            $controller = new AdministrativoController();
            break;
        case 'User':
            $controller = new UserController();
            break;
        case 'UserSession':
            $controller = new UserSessionController();
            break;
        case 'Perfil':
            $controller = new PerfilController();
            break;    
        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>