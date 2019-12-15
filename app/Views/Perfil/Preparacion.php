<header style="width:100%;">
<?php require_once('Views/Layouts/menuUser.php');
//echo " Funciona Preparacion";
?>
</header>

<div style="padding-left: 1%; padding-right: 1%; width: 100%;">
    <h2>Preparación Académica</h2>
    <form action="?controller=Perfil&&action=Preparacion" method="POST" class="was-validated shadow p-3 mb-5 bg-white rounded">
        <div class="form-row">
            <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Título: </label>
                    <input type="text" name="titulo" class="form-control is-invalid" required>
            </div>
            <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Año: </label>
                    <input type="text" name="anio" class="form-control is-invalid" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Universidad: </label>
                    <input type="text" name="universidad" class="form-control is-invalid" required>
            </div>
            <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Nivel: </label>
                    <input type="text" name="nivel" class="form-control is-invalid" required>
            </div>
        </div>


        <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success">Agregar preparación académica</button>
            </div>
        </div>
        <?php
            if(isset($Listo)){
                echo $Listo;
            }
        ?>
    </form>
</div>