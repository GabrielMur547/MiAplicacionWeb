<header>
<?php require_once('Views/Layouts/menuUser.php');
//echo " Funciona Actualizar";
?>
</header>
<div style="padding-left: 1%; padding-right: 1%; width: 100%;">
    <h2>Editar Perfil</h2>
    <form action="?controller=Perfil&&action=Actualizar" method="POST" class="was-validated">
            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label >Primer nombre: </label>
                    <input value="<?php $dato["primer_nombre"] ?>" type="text" name="primer_nombre" class="form-control is-invalid" required>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label >Segundo nombre: </label>
                    <input value="<?php $dato["segundo_nombre"] ?>" type="text" name="segundo_nombre" class="form-control is-invalid" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Primer apellido</label>
                    <input value="<?php $dato["primer_apellido"] ?>" type="text" name="primer_apellido" class="form-control is-invalid" required>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Segundo apellido:</label>
                    <input value="<?php $dato["segundo_apellido"] ?>" type="text" name="segundo_apellido" class="form-control is-invalid" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Fecha de nacimiento:</label>
                    <input value="<?php $dato["fecha_nac"] ?>" type="date" name="fecha_nac" class="form-control is-invalid" required>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Cédula:</label>
                    <input value="<?php $dato["cedula"] ?>" type="text" name="cedula" class="form-control is-invalid" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6" style="padding-left: 2%; padding-right: 2%;">
                    <label>Tipo de sangre:</label>
                    <select value="<?php $dato["tipo_sangre"] ?>" name="tipo_sangre" class="custom-select is-invalid" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="">A+</option>
                        <option value="">A-</option>
                        <option value="">B+</option>
                        <option value="">B-</option>
                        <option value="">AB+</option>
                        <option value="">AB-</option>
                        <option value="">O+</option>
                        <option value="">O-</option>
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Estado civíl:</label>
                    <select value="<?php $dato["estado_civil"] ?>" name="estado_civil" class="custom-select is-invalid" id="validationServer04" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Viudo(a)</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Género:</label>
                    <select value="<?php $dato["genero"] ?>" name="genero" class="custom-select is-invalid" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Correo:</label>
                    <input value="<?php $dato["correo"] ?>" type="email" name="correo" class="form-control is-invalid" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Celular:</label>
                    <input value="<?php $dato["celular"] ?>" type="text" name="celular" class="form-control is-invalid" required>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Teléfono residencial:</label>
                    <input value="<?php $dato["telefono_casa"] ?>" type="text" name="telefono_casa" class="form-control is-invalid" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Provincia donde reside:</label>
                    <input value="<?php $dato["provincia_res"] ?>" type="text" name="provincia_res" class="form-control is-invalid" required>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Distrito donde reside:</label>
                    <input value="<?php $dato["distrito_res"] ?>" type="text" name="distrito_res" class="form-control is-invalid" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Corregimiento donde reside:</label>
                    <input value="<?php $dato["corregimiento_res"] ?>" type="text" name="corregimiento_res" class="form-control is-invalid" required>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Dirección específica:</label>
                    <input value="<?php $dato["direccion_especif"] ?>" type="text" name="direccion_especif" class="form-control is-invalid" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Categoría:</label>
                    <select value="<?php $dato["categoria_doc"] ?>" class="custom-select is-invalid" name="categoria_doc" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Tiempo Completo</option>
                        <option value="2">Tiempo Parcial</option>
                        <option value="3">Investigador</option>
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                    <label>Sede:</label>
                    <select value="<?php $dato["ubicacion_sede"] ?>" class="custom-select is-invalid" name="ubicacion_sede" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option>Sede central. Campus Dr. Victor Levi Sasso</option>
                        <option>Tocumen</option>
                        <option>Howard</option>
                        <option>Panamá Oeste</option>
                        <option>Colón</option>
                        <option>Coclé</option>
                        <option>Azuero</option>
                        <option>Veraguas</option>
                        <option>Chiriquí</option>
                        <option>Bocas del Toro</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mb-3" style="padding-left: 2%; padding-right: 2%;">
                    <label>Departamento:</label>
                    <input value="<?php $dato["depto"] ?>" type="text" name="depto" class="form-control is-invalid" required>
                </div>
                <div class="form-group col-md-6 mb-3"  style="padding-left: 2%; padding-right: 2%;">
                </div>
            </div>

        

        <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
            <div class="col-md-11">
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>

</div>
