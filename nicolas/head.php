<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="shortcut icon" href="../imagenes/php (1).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'open-sans';
    }

    .contenedor {
        padding: 60px 0;
        width: 90%;
        max-width: 1000px;
        margin: auto;
        overflow: hidden;
    }

    .titulo {
        color: rgb(255, 175, 1);
        font-size: 30px;
        text-align: center;
        margin-bottom: 60px;
    }

    /* Seguimos con el header */

    header {
        width: 100%;
        height: 600px;
        background: #5433ff;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right,
                hsla(44, 100%, 50%, 0.6),
                hsla(59, 98%, 50%, 0.6),
                rgb(243, 232, 128)),
            url(../imagenes/PHP-8-for-WordPress.jpg);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right,
                hsla(44, 100%, 50%, 0.6),
                hsla(59, 98%, 50%, 0.6),
                rgb(243, 232, 128)),
            url(../imagenes/PHP-8-for-WordPress.jpg);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background-size: cover;
        background-attachment: fixed;
        position: relative;
    }

    nav {
        text-align: right;
        padding: 30px 50px 0 0;
    }

    nav>a {
        color: #fff;
        text-decoration: none;
        margin-right: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }

    nav>a:hover {
        text-decoration: wavy;
        color: rgb(0, 162, 255);
        transition: all 1s;
    }

    header .textos-header {
        display: flex;
        height: 430px;
        width: 100%;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .textos-header h1 {
        font-size: 60px;
        color: #fff;
    }

    .textos-header h2 {
        font-size: 25px;
        font-weight: 300;
        color: rgb(255, 255, 255);
    }

    .wave {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    /* todo php */

    .contenedor-todo-php {
        display: flex;
        justify-content: space-evenly;
        justify-items: auto;
    }

    .imagen-about-us {
        width: 48%;
    }

    .todo-php .contenido-textos {
        width: 48%;
    }

    .contenido-textos h3 {
        margin-bottom: 15px;
    }

    .contenido-textos h3 span {
        background: rgb(255, 175, 1);
        color: #fff;
        border-radius: 8px;
        display: inline-block;
        text-align: center;
        width: 30px;
        height: 30px;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 5);
        padding: 5px;
        margin-right: 5px;
    }

    .contenido-textos p {
        padding: 0px 0px 30px 15px;
        font-weight: 300;
        text-align: justify;
    }

    /* galeria */

    .portafolio {
        background: #f2f2f2;
    }

    .galeria-port {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .imagen-port {
        width: 27%;
        height: 30%;
        margin-bottom: 10px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.5);
        border-radius: 50px;
    }

    .imagen-port>img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .hover-galeria {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        transform: scale(0);
        background: hsla(49, 100%, 50%, 0.7);
        transition: transform 0.5s;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 50px;
    }

    .hover-galeria img {
        width: 50px;
    }

    .hover-galeria p {
        color: #ffffff;
        font-size: larger;
    }

    .imagen-port:hover .hover-galeria {
        transform: scale(1);
    }

    footer {
        background: #414141;
        padding: 60px 0 30px 0;
        margin: auto;
        overflow: hidden;
    }

    .contenedor-footer {
        display: flex;
        width: 90%;
        justify-content: space-evenly;
        margin: auto;
        padding-bottom: 50px;
        border-bottom: 1px solid #ccc;
    }

    .content-foo {
        text-align: center;
    }

    .content-foo h4 {
        color: #fff;
        border-bottom: 3px solid #d36820;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }

    .content-foo p {
        color: #ccc;
    }

    /*estilos boton*/

    .button-87 {
        margin: 5px;
        padding: 8px 15px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        border-radius: 8px;
        display: block;
        border: 0px;
        font-weight: 500;
        box-shadow: 0px 0px 14px -7px #f09819;
        background-image: linear-gradient(45deg,
                #ff512f 0%,
                #f09819 51%,
                #2f5fff 100%);
        cursor: pointer;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        text-decoration: none;
    }

    .button-87:hover {
        background-position: right center;
        background-image: linear-gradient(45deg,
                #ff512f 0%,
                #6285f8 51%,
                #2f5fff 100%);
        color: rgb(255, 255, 255);
        text-decoration: none;
    }

    .button-87:active {
        transform: scale(0.95);
    }

    .campotexto {
        border-radius: 5px;
        border: none;
        box-shadow: 0px 0px 12px -2px #f09819;
        padding: 3px 8px;
    }
</style>


<body>

    <header>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">Portafolio</a>
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
                                    <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
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