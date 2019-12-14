<header>
<?php require_once('Views/Layouts/menu.php');
?>

<h2>Información Docente</h2>
<div style="margin-left: 5%; margin-right: 5%;" class="shadow p-3 mb-5 bg-white rounded">
            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    
                    <label class="font-weight-bold">Primer nombre: </label>
                    <br>
                    <?php echo $dato["primer_nombre"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Segundo nombre: </label>
                    <br>
                    <?php echo $dato["segundo_nombre"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Primer apellido</label>
                    <br>
                    <?php echo $dato["primer_apellido"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Segundo apellido:</label>
                    <br>
                    <?php echo $dato["segundo_apellido"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Fecha de nacimiento:</label>
                    <br>
                    <?php echo $dato["fecha_nac"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Cédula:</label>
                    <br>
                    <?php echo $dato["cedula"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Tipo de sangre:</label>
                    <br>
                    <?php echo $dato["tipo_sangre"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Estado civíl:</label>
                    <br>
                    <?php echo $dato["estado_civil"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Género:</label>
                    <br>
                    <?php echo $dato["genero"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Correo:</label>
                    <br>
                    <?php echo $dato["correo"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Celular:</label>
                    <br>
                    <?php echo $dato["celular"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Teléfono residencial:</label>
                    <br>
                    <?php echo $dato["telefono_casa"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Provincia donde reside:</label>
                    <br>
                    <?php echo $dato["provincia_res"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Distrito donde reside:</label>
                    <br>
                    <?php echo $dato["distrito_res"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Corregimiento donde reside:</label>
                    <br>
                    <?php echo $dato["corregimiento_res"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Dirección específica:</label>
                    <br>
                    <?php echo $dato["direccion_especif"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Categoría:</label>
                    <br>
                    <?php echo $dato["categoria_doc"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Sede:</label>
                    <br>
                    <?php echo $dato["ubicacion_sede"] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label class="font-weight-bold">Departamento:</label>
                    <br>
                    <?php echo $dato["depto"] ?>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                </div>
            </div>

            <?php require_once ('Controllers/UserSessionController.php');
            //$userSession = new UserSessionController();
            if($_SESSION['user'] == 'gabrielmurillo547@gmail.com'){ ?>
                <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
                    <div class="col-md-11">
                    </div>
                    <div class="col-md-1">
                    <a class="btn btn-success" href="http://www.utp.ac.pa" role="button" target="_blank">Editar</a>
                    </div>
                </div>
                <?php
            }
            else if ($_SESSION['user'] != 'gabrielmurillo547@gmail.com'){
                
            }
            ?>

        <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
            <div class="col-md-11">
            </div>
            <div class="col-md-1">
            <a class="btn btn-success" href="?controller=Perfil&action=Actualizar" role="button" target="_blank">Editar</a>
            </div>
        </div>
</div>