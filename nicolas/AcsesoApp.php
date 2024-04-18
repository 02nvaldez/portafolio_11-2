<title>Acseso</title>
<?php 
        include("head.php");
    ?>
<section class="contenedor todo-php">
    <br><br><br>
    <center>
        <?php
            $usuarioValido = "pepito123";
            $contrasenaValida = "pepo111";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombreUsuario = $_POST["nombreUsuario"];
                $contrasena = $_POST["contrasena"];
                if ($nombreUsuario === $usuarioValido && $contrasena === $contrasenaValida) {
                    echo "¡Bienvenido, $usuarioValido! Acceso completo a la aplicación.";
                } else {
                    echo "Acceso limitado para usuarios invitados.";
                }
            }
            
            ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="nombreUsuario">Nombre de usuario:</label>
            <input type="text" id="nombreUsuario" name="nombreUsuario" value="" required>
            <br><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <br><br>
            <input class="button-87" type="submit" value="Ingresar">
            <p></p>
            <img src="../imagenes/USUARIOYCONTRASEÑA.jpg" />
        </form>
    </center>
</section>
</main>

<?php 
include("footer.php");
?>