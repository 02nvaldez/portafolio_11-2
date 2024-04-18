<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Responsividad </title>
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
                        <li><a href="p1.php">¿Qué es? - Función</a></li>
                        <li><a href="p2.php">Herramientas</a></li>
                        <li><a href="#">Responsividad</a></li>
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
                    <img src="https://th.bing.com/th/id/OIP.qEnDRp-eMIKfnUfEA0Z_GgHaEo?rs=1&pid=ImgDetMain"
                        alt="profile pic">
                </div>
                <div class="hero-text">
                    <h1>RESPONSIVIDAD</h1><br>
                    <p>
                        La responsividad en el diseño web se refiere a la capacidad de un sitio web para adaptarse de
                        manera dinámica y fluida a diferentes dispositivos y tamaños de pantalla, como computadoras de
                        escritorio, tabletas y teléfonos inteligentes. El objetivo es garantizar una experiencia de
                        usuario óptima independientemente del dispositivo que se esté utilizando, evitando la necesidad
                        de crear versiones separadas del sitio para cada tipo de pantalla.

                    </p><br>

                    <p>Para lograr la responsividad en el diseño web, se pueden emplear diversas técnicas, entre las
                        cuales destacan:</p><br>

                    <p>1. Diseño adaptable (Responsive Design): Esta técnica utiliza CSS para adaptar el diseño y el
                        contenido del sitio web en función del tamaño de la pantalla del dispositivo. Se emplean
                        unidades relativas como porcentajes, ems o unidades de vista para definir tamaños y márgenes, en
                        lugar de unidades absolutas como píxeles. Además, se utilizan media queries para aplicar estilos
                        específicos según el tamaño de la pantalla, como ocultar, reorganizar o redimensionar elementos.
                    </p><br>

                    <p>2. Uso de flexbox y grid: Flexbox y CSS Grid son dos sistemas de diseño en CSS que permiten crear
                        diseños flexibles y complejos de manera más eficiente. Estas técnicas facilitan la creación de
                        diseños responsivos al proporcionar herramientas para organizar y alinear elementos de forma
                        dinámica, lo que resulta especialmente útil para diseños de varias columnas o elementos con
                        disposiciones complejas.</p><br>
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