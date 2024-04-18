<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="shortcut icon" href="../imagenes/php (1).png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css\estilos.css">
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
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Portafolio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Portafolio PHP</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="As" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Primer Periodo
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/AcsesoApp.php">Acseso
                                                App</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/AreaTriangulo.php">Area
                                                Triangulo</a></li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/CalculDesc.php">Calcular
                                                Descuento</a></li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/FigurasGeometricas.php">Figuras
                                                Geometricas</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/HolaMundo.php">Hola
                                                Mundo</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/Imc1.php">Imc
                                                1</a></li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/Imc2.php">Imc
                                                2</a></li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/LogoPHP.php">Logo
                                                PHP</a></li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/Notas.php">Notas</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/OperacionesBasicas.php">Operaciones
                                                Basicas</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/Suma.php">Suma</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="As" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Segundo Periodo
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/punto1.php">Numero
                                                Positivo
                                                o Negativo</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/punto2.php">Numero
                                                Par o
                                                Impar</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/punto3.php">Numero
                                                Positivo
                                                o Negativo 2</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/punto4.php">Numero
                                                Mayor o
                                                Menor
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/punto5.php">Menú
                                                Restaurante</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/whiledowhile1.php">Ventas
                                                diarias</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/whiledowhile2.php">Facturas
                                                Meses</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/quiz1.php">Entradas</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/quiz2.php">Tabla
                                                de Multiplicar</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/quiz3.php">Descuentos
                                                Por Puntos
                                                Acumulados</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="As" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Tercer Periodo
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/3p1.php">Array
                                                1</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/3p2.php">Array
                                                2</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/3p3.php">Array
                                                3</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/3p4.php">Array
                                                4
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/Registro%20de%20Notas%20Escolares.php">Registro
                                                de notas Escolares
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/Lista%20de%20Tareas.php">Lista
                                                de Tareas
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/Gestión%20de%20Productos%20en%20un%20Supermercado.php">Gestión
                                                de Productos en un Supermercado
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/quizp2.p1.php">Quiz
                                                punto 1
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/quizp2.p2.php">Quiz
                                                punto 2
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://localhost/Portafolio%20Nicolas%20Valdez/nicolas/quizp2.p3.php">Quiz
                                                punto 3
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
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