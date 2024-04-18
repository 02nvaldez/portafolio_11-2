<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geométricas - PHP</title>
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

    <center>
        <h2>Calculadora de Áreas</h2>
        <br>
        <p>
        <h3>Para cuadrado y rectangulo: lado 1 y lado 2</h3>
        </p>
        <p>
        <h3>Para triángulo: base y altura</h3>
        </p>
        <p>
        <h3>Para circulo: radio</h3>
        </p>
        <br><br>
        <form action="FigurasGeometricas.php" method="POST">
            <label for="figura">Selecciona la figura:</label>
            <select name="figura" id="figura">
                <option value="cuadrado">Cuadrado</option>
                <option value="rectangulo">Rectángulo</option>
                <option value="triangulo">Triángulo</option>
                <option value="circulo">Círculo</option>
            </select>
            <br><br>
            <label for="lado1">Lado 1:</label>
            <input type="text" name="lado1" id="lado1">
            <br><br>
            <label for="lado2" id="lado2-label">Lado 2:</label>
            <input type="text" name="lado2" id="lado2">
            <br><br>
            <!-- Agrega campos para base y altura del triángulo -->
            <label for="base" id="base-label">Base:</label>
            <input type="text" name="base" id="base">
            <br><br>
            <label for="altura" id="altura-label">Altura:</label>
            <input type="text" name="altura" id="altura">
            <br><br>
            <!-- Agrega campo para el radio del círculo -->
            <label for="radio" id="radio-label">Radio:</label>
            <input type="text" name="radio" id="radio">
            <br><br>
            <input class="button-87" type="submit" value="Calcular">
            <br><br>
        </form>
    </center>
    <center>
        <?php
        if ($_POST) {
            $figura = $_POST['figura'];

            switch ($figura) {
                case 'cuadrado':
                    $lado1 = $_POST['lado1'];
                    $area = $lado1 * $lado1;
                    break;
                case 'rectangulo':
                    $lado1 = $_POST['lado1'];
                    $lado2 = $_POST['lado2'];
                    $area = $lado1 * $lado2;
                    break;
                case 'triangulo':
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];
                    $area = (0.5) * $base * $altura;
                    break;
                case 'circulo':
                    $radio = $_POST['radio'];
                    $area = 3.14159265359 * ($radio * $radio);
                    break;
                default:
                    $area = "Figura no válida";
            }

            echo "<p>El área de la figura es: $area</p>";
        }
        ?>
        <br><br><br>

    </center>

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

</body>

</html>