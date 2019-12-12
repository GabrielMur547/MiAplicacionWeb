<div style="margin-left: 20%;margin-right: 20%;margin-top: 5%;" class="shadow p-3 mb-5 bg-white rounded">

        <h2>Registrar</h2>
        <form action="?controller=Docente&&action=save" method="POST">
            <div class="form-group">
                        <label for="exampleInputEmail1">Dirección de correo:</label>
                        <input type="email" name="correo" class="form-control is-invalid" placeholder="Correo Institucional" required>
            </div>
            <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="contrasenia" class="form-control is-invalid" placeholder="Contraseña..." required>
            </div>
            <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control is-invalid" placeholder="Nombre..." required>
            </div>
            <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control is-invalid" placeholder="Apellido..." required>
            </div>
            <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" name="cedula" class="form-control is-invalid" placeholder="Cedula..." required>
            </div>
            <div class="form-group">
                    <label>Categoría</label>
                    <select class="custom-select is-invalid" name="categoria" required>
                            <option selected disabled value="">- Seleccione -</option>
                            <option>Tiempo completo</option>
                            <option>Tiempo parcial</option>
                            <option>Investigador</option>
                        </select>  
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <?php
            if(isset($errorRegister)){
                echo $errorRegister;
            }
        ?>
</div>