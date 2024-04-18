<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acseso</title>
    <link rel="shortcut icon" href="../imagenes/php (1).png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Portafolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Portafolio PHP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="As" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Primer Periodo
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../primer periodo/AcsesoApp.php">Acseso App</a>
                                    </li>
                                    <li><a class="dropdown-item" href="../primer periodo/AreaTriangulo.php">Area
                                            Triangulo</a></li>
                                    <li><a class="dropdown-item" href="../primer periodo/Calcul Desc.php">Calcular
                                            Descuento</a></li>
                                    <li><a class="dropdown-item"
                                            href="../primer periodo/EstructurasDeControl.php">Estructuras De
                                            Control</a></li>
                                    <li><a class="dropdown-item" href="../primer periodo/FigurasGeometricas.php">Figuras
                                            Geometricas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="../primer periodo/HolaMundo.php">Hola Mundo</a>
                                    </li>
                                    <li><a class="dropdown-item" href="../primer periodo/Imc1.php">Imc 1</a></li>
                                    <li><a class="dropdown-item" href="../primer periodo/Imc2.php">Imc 2</a></li>
                                    <li><a class="dropdown-item" href="../primer periodo/LogoPHP.php">Logo PHP</a></li>
                                    <li><a class="dropdown-item" href="../primer periodo/Notas.php">Notas</a></li>
                                    <li><a class="dropdown-item"
                                            href="../primer periodo/OperacionesBasicas.php">Operaciones Basicas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="../primer periodo/Suma.php">Suma</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section class="textos-header">
            <h1>Portafolio PHP</h1>
            <h2>Nicolas Valdez Manrique</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-20.59,49.84 C91.70,125.83 299.94,-37.97 525.67,66.61 L526.24,176.16 L-22.29,152.47 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>

    </header>
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
        </main>

</body>


<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Nicolas Valdez Manrique</h4>
            <p>Comfandi Miraflores</p>
            <p>Grado 11-2</p>
            <p>9-Noviembre-2023</p>
        </div>
    </div>
</footer>

</html>