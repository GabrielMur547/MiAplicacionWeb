<div>
    <form action="?controller=User&action=verify" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2>Iniciar sesión</h2>
        <p>Correo Electrónico: <br>
        <input type="text" name="correo"></p>
        <p>Contraseña: <br>
        <input type="password" name="contrasenia"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>
</div>