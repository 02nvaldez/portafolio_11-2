<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - ¿Que es? - Función </title>
    <link rel="stylesheet" href="estilos.index.inicio.css">
    <!----Font awesome cdn  font icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <div class="hero-header">
        <div class="wrapper">
            <header>
                <nav>
                    <div class="togglebtn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="navlinks">
                        <li><a href="index.inicio.php">Inicio</a></li>
                        <li><a href="#">¿Qué es? - Función</a></li>
                        <li><a href="p2.php">Herramientas</a></li>
                        <li><a href="p3.php">Responsividad</a></li>
                        <li><a href="p4.php">Diferencias</a></li>
                        <li><a href="p5.php">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                        <li><a href="p8.php">Array</a></li>
                        <li><a href="p9.php">Ejemplos</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic">
                    <img src="https://th.bing.com/th/id/OIP.8R2Szu6wOEOXkz_RFq6KbgHaEK?rs=1&pid=ImgDetMain"
                        alt="profile pic">
                </div>
                <div class="hero-text">
                    <h1>¿QUÉ ES?/FUNCIÓN</h1><br>
                    <p> Un recurso frontend en el desarrollo web se refiere a todos los elementos visibles y
                        funcionales
                        de un sitio web o aplicación que interactúan directamente con el usuario. Estos recursos
                        incluyen HTML, CSS y JavaScript, así como también imágenes, videos, fuentes tipográficas y
                        otros
                        archivos multimedia utilizados para crear la interfaz de usuario.</p><br>

                    <p>La función principal del frontend es proporcionar una experiencia de usuario atractiva,
                        intuitiva y funcional. Esto implica diseñar y desarrollar la estructura, el diseño y la
                        interactividad de un sitio web o aplicación para que los usuarios puedan interactuar
                        fácilmente
                        con ella. El frontend se encarga de presentar la información de manera clara y organizada,
                        garantizar que la interfaz sea fácil de navegar y permitir que los usuarios realicen
                        acciones
                        específicas, como completar formularios, realizar compras en línea o interactuar con
                        contenido
                        multimedia.</p><br>
                </div>
            </div>
        </div>
    </div>
    <!---typed js for typing text effect-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
    <script>
    /** creating button click show hide navbar **/
    var togglebtn = document.querySelector(".togglebtn");
    var nav = document.querySelector(".navlinks");
    var links = document.querySelector(".navlinks li");

    togglebtn.addEventListener("click", function() {
        this.classList.toggle("click");
        nav.classList.toggle("open");
    })

    var typed = new Typed(".input", {
        strings: ["Frontend Developer", "UX Designer", "Web Developer"],
        typedSpeed: 70,
        backSpeed: 55,
        loop: true
    })
    </script>
</body>

</html>