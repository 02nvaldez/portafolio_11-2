<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Accesibilidad </title>
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
                        <li><a href="p3.php">Responsividad</a></li>
                        <li><a href="p4.php">Diferencias</a></li>
                        <li><a href="#">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                        <li><a href="p8.php">Array</a></li>
                        <li><a href="p9.php">Ejemplos</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic">
                    <img src="https://cdn.dribbble.com/users/3777498/screenshots/6920081/media/d066f9077923859bb9a7dec164862c76.png?compress=1&resize=400x300&vertical=top"
                        alt="profile pic">
                </div>
                <div class="hero-text">
                    <h1>ACCESIBILIDAD</h1><br>
                    <p>La accesibilidad en el diseño frontend es fundamental para garantizar que todas las personas,
                        independientemente de sus capacidades físicas o cognitivas, puedan acceder y utilizar un sitio
                        web de manera efectiva. Algunas de las razones por las que la accesibilidad es importante
                        incluyen:</p><br>

                    <p>1. Inclusión y equidad: La accesibilidad garantiza que todas las personas, incluidas aquellas con
                        discapacidades visuales, auditivas, motoras o cognitivas, puedan acceder y utilizar un sitio web
                        sin barreras. Esto promueve la inclusión digital y la equidad en línea.</p><br>

                    <p>2. Cumplimiento legal y normativo: En muchos países, existen leyes y regulaciones que exigen que
                        los sitios web sean accesibles para todas las personas. Cumplir con estas normativas no solo es
                        una obligación legal, sino también una muestra de compromiso con los derechos humanos y la
                        igualdad de oportunidades.</p><br>

                    <p>3. Mejora de la experiencia del usuario: La implementación de prácticas de accesibilidad no solo
                        beneficia a las personas con discapacidades, sino que también mejora la experiencia del usuario
                        para todos los usuarios. Por ejemplo, un diseño claro y fácil de navegar beneficia a personas
                        mayores, usuarios con conexiones lentas a internet o aquellos que prefieren navegar utilizando
                        dispositivos móviles.</p><br>
                    <p>Para mejorar la accesibilidad en una página web, se pueden implementar diversas prácticas, entre
                        las cuales se incluyen:</p><br>

                    <p>1. Utilizar etiquetas semánticas en HTML: Emplear elementos semánticos HTML como &lt;header&gt;,
                        &lt;nav&gt;, &lt;main&gt;, &lt;footer&gt;, entre otros, ayuda a los usuarios, especialmente a
                        aquellos que utilizan lectores de pantalla, a comprender la estructura y el contenido del sitio
                        de manera más clara.</p><br>


                    <p>2. Asegurar un contraste adecuado: Utilizar combinaciones de colores con un buen contraste entre
                        el texto y el fondo facilita la legibilidad para personas con discapacidad visual o dificultades
                        para distinguir colores. Es importante verificar que el contraste cumpla con los estándares de
                        accesibilidad, como los establecidos por el Web Content Accessibility Guidelines (WCAG).</p><br>


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