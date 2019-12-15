
<header style="width:100%;">
<?php require_once('Views/Layouts/menu.php');
//echo " login";
?>
</header>
<h2 class="mt-2">Docentes</h2>
<div style="padding-left:10%; padding-right: 10%;padding-top: 2%; width:100%">
        <form action="?controller=Docente&&action=busqueda" method="POST">
            <div class="input-group shadow p-3 mb-5 bg-white rounded" style="border-radius: 6px;">
                <input type="text" name="buscar" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="busc" href="?controller=Administrativo&action=busqueda">Buscar</button>
                </div>
            </div>  
        </form>
</div>
<form action="?controller=Docente&&action=editar_otro" method="POST">    
<div class="table-responsive" style="padding-left: 2%; padding-right: 2%;">
    <table class="table">
            <thead class="thead-dark" style="text-align: center;">
                <tr>
                    <th scope="col">Cédula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Género</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($datos as $dato) { ?>
                    <tr>
                    
                        <td><a href="?controller=Docente&&action=editar_otro" name="cedula"><?php echo $dato["cedula"] ?></a></td>
                        <td><?php echo $dato["primer_nombre"] . ' ' . $dato["segundo_nombre"] ?></td>
                        <td><?php echo $dato["primer_apellido"] . ' ' . $dato["segundo_apellido"] ?></td>
                        <td><?php echo $dato["genero"] ?></td>
                        <td><?php echo $dato["categoria_doc"] ?></td>
                        <td><?php echo $dato["depto"] ?></td>
                        <td><?php echo $dato["celular"] ?></td>
                        <td><?php echo $dato["correo"] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
</div>
</form>