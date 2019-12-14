
<div style="margin:auto ;margin-top: 5%;" class="shadow p-3 mb-5 bg-white rounded">
    <form action="?controller=User&action=verify" method="POST">
       
        <h2>Iniciar sesión</h2>
        <div class="form-group">
                    <label for="exampleInputEmail1">Dirección de correo:</label>
                    <input type="email" name="correo" class="form-control is-invalid" placeholder="Correo Institucional" required>
        </div>
        <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="contrasenia" class="form-control is-invalid" placeholder="Contraseña..." required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
    <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
</div>