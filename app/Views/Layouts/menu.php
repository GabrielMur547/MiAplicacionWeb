<div style="background-color: green; width: 100%;">
<nav class="navbar navbar-expand-lg navbar-light" >
    <button style="border-color:white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="background-color: green;">
        <img src="http://www.utp.ac.pa/sites/default/files/SISTEMAS-LOGO.png" style="width:4%; position:center" />
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        
            <li class="nav-item active">
                <a style="color:white;font-size:16px;" class="nav-link" href="?controller=Home&action=index">Secretaría Académica<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a style="color:white; font-size:16px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gestión Docente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=Docente&action=index">Listar Docentes</a>
                    <a class="dropdown-item" href="?controller=Docente&action=add">Agregar Docente</a>

                </div>
            </li>

            <li class="nav-item dropdown">
                <a style="color:white; font-size:16px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gestión Administrativa
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=Administrativo&action=index">Listar Administrativo</a>
                </div>
            </li>
        </ul>
        
            <a style="color: green; border-color:white;" class="btn btn-light" href="?controller=UserSession&action=closeSession" id="closesession" role="button">
            Cerrar Sesión 
            </a>
</div>
    </div>
</nav>
</div>