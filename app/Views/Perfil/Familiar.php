<header>
<?php require_once('Views/Layouts/menuUser.php');
echo " Funciona Familiar";
?>
</header>

<div style="padding-left: 1%; padding-right: 1%; width: 100%;">
    <h2>Agregar Familiar</h2>
    <form action="?controller=Perfil&&action=Familiar" method="post" class="was-validated shadow p-3 mb-5 bg-white rounded">
        <div class="form-row">
            <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Nombre: </label>
                    <input type="text" name="nombre_fam" class="form-control is-invalid" required>
            </div>
            <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Apellido: </label>
                    <input type="text" name="apellido_fam" class="form-control is-invalid" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Fecha de nacimiento: </label>
                    <input type="date" name="fecha_nac_fam" class="form-control is-invalid" required>
            </div>
            <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Localizacíon: </label>
                    <input type="text" name="localizar" class="form-control is-invalid" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Parentezco: </label>
                    <input type="text" name="parentezco" class="form-control is-invalid" required>
            </div>
            <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Prioridad: </label>
                    <select name="prioridad" class="custom-select is-invalid" id="validationServer04" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Telefono residencial: </label>
                    <input type="text" name="telef_casa_fam" class="form-control is-invalid" required>
            </div>
            <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Telefono de oficina: </label>
                    <input type="text" name="telef_ofi_fam" class="form-control is-invalid" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Celular: </label>
                    <input type="text" name="celular_fam" class="form-control is-invalid" required>
            </div>
            <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Correo: </label>
                    <input type="text" name="correo_fam" class="form-control is-invalid" required>
            </div>
        </div>
    

    <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-success">Agregar Familiar</button>
        </div>
    </div>
    </form>

</div>