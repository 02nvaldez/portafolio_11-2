<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Herramientas </title>
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
                        <li><a href="#">Herramientas</a></li>
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
                    <img src="https://th.bing.com/th/id/OIP.0RbYg5YNX3r64S6FxsPH9QHaHa?rs=1&pid=ImgDetMain"
                        alt="profile pic">
                </div>
                <div class="hero-text">
                    <h1>HERRAMIENTAS</h1><br>
                    <p>1. HTML (HyperText Markup Language): Es el lenguaje de marcado estándar para crear páginas web.
                        HTML se utiliza para definir la estructura y el contenido de una página web, como encabezados,
                        párrafos, listas, enlaces, imágenes, formularios, entre otros elementos. Es fundamental en el
                        desarrollo web porque proporciona la base sobre la cual se construye el contenido de un sitio
                        web.</p><br>

                    <p>2. CSS (Cascading Style Sheets): CSS se utiliza para definir el estilo visual y el diseño de una
                        página web, incluyendo aspectos como colores, tipografías, márgenes, espaciados, alineaciones y
                        animaciones. Permite separar el contenido de la presentación, lo que facilita la creación de
                        diseños consistentes y adaptables a diferentes dispositivos y tamaños de pantalla.</p><br>

                    <p>3. JavaScript: JavaScript es un lenguaje de programación que se utiliza para agregar
                        interactividad y dinamismo a una página web. Permite crear efectos visuales, animaciones,
                        validaciones de formularios, solicitudes asíncronas al servidor (AJAX), manipulación del DOM
                        (Document Object Model) y muchas otras funcionalidades que mejoran la experiencia del usuario.
                        Es una herramienta esencial en el desarrollo frontend debido a su versatilidad y capacidad para
                        crear aplicaciones web interactivas.</p><br>

                    <p>4. Frameworks y bibliotecas frontend: Tales como React.js, AngularJS, Vue.js, Bootstrap,
                        Foundation, entre otros, son herramientas que proporcionan conjuntos de componentes
                        predefinidos, estilos y funcionalidades que facilitan el desarrollo frontend. Estas herramientas
                        permiten crear aplicaciones web de manera más eficiente y escalable, al tiempo que promueven
                        buenas prácticas de desarrollo y mantienen la consistencia en el código.</p><br>

                    <p>5. Herramientas de gestión de paquetes y construcción: Como npm (Node Package Manager) y yarn,
                        que permiten gestionar dependencias de proyectos y automatizar tareas como la instalación de
                        paquetes, la ejecución de scripts y la optimización de recursos. También se utilizan
                        herramientas como Webpack, Parcel y Gulp para empaquetar, compilar y optimizar archivos CSS,
                        JavaScript y otros recursos para su implementación en producción.</p><br>

                    <p>6. Herramientas de prueba y depuración: Como Chrome DevTools, Firefox Developer Tools y
                        herramientas de prueba de unidades y extremo a extremo (como Jest, Jasmine, Selenium), son
                        importantes para garantizar la calidad y la estabilidad de las aplicaciones web, así como para
                        identificar y solucionar errores y problemas de rendimiento.</p><br>
                </div>
            </div>
        </div>
    </div>
    <!---typed js for typing text effect-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js">
    </script>
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