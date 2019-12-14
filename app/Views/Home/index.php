<header>
<?php require_once ('Controllers/UserSessionController.php');
//$userSession = new UserSessionController();
if($_SESSION['user'] == 'gabrielmurillo547@gmail.com'){
    require_once('Views/Layouts/menu.php');
    //echo " es admin";
}
else if ($_SESSION['user'] != 'gabrielmurillo547@gmail.com'){
    require_once('Views/Layouts/menuUser.php');
    //echo " no es admin";
}
?>
</header>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="alert alert-primary mt-3" role="alert">
        Bienvenidos al Sistema de Gestión de la Secretaría Administrativa de la FISC
    </div>
</main>
