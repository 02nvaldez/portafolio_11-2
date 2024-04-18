<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - CMS v.s Framework</title>
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
                        <li><a href="p5.php">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                        <li><a href="p8.php">Array</a></li>
                        <li><a href="p9.php">Ejemplos</a></li>

                    </ul>
                </nav>
            </header>
            <div class=" container">
                <div class="hero-pic">
                    <img
                        src="https://josebarreramayoral.es/wp-content/uploads/2018/11/resultado_combinar_arrays_en_php.jpg">
                </div>
                <div class="hero-text">
                    <h1>¿QUÉ ES UN ARRAY?</h1><br>
                    <p>Un array en PHP es una estructura de datos que puede contener una colección ordenada de
                        elementos. Estos elementos pueden ser de cualquier tipo, como números, cadenas de texto,
                        booleanos, objetos, etc. Los arrays en PHP pueden ser indexados numéricamente o asociativamente.
                    </p><br>

                    <p>- En un array indexado numéricamente, cada elemento tiene un índice numérico único que comienza
                        desde cero y aumenta en uno para cada elemento adicional.</p><br>

                    <p>- En un array asociativo, cada elemento tiene una clave única asociada a él en lugar de un índice
                        numérico.</p><br><br>
                    <h1>MANERAS DE CREAR UN ARRAY</h1><br>
                    <p>En PHP se pueden crear arrays de varias maneras. Algunos ejemplos son:.</p><br>
                    <p>1. Creación de un array vacío y añadiendo elementos individualmente:</p><br>
                    <p>
                    <pre><code>$miArray = array();</code></pre>
                    <pre><code>$miArray[] = "elemento1";</code></pre>
                    <pre><code>$miArray[] = "elemento2";</code></pre>
                    </p><br>

                    <p>2. Creación de un array con elementos predefinidos:</p><br>
                    <p>
                    <pre><code>$miArray = array("elemento1", "elemento2", "elemento3");</code></pre>
                    </p><br>

                    <p>3. Creación de un array asociativo:</p><br>
                    <p>
                    <pre><code>$miArray = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");</code></pre>
                    </p><br>

                    <p>4. Usando la sintaxis de corchetes cuadrados (a partir de PHP 5.4):</p><br>
                    <p>
                    <pre><code>$miArray = ["elemento1", "elemento2", "elemento3"];</code></pre>
                    </p><br>

                    <p>5. Definiendo un array multi-dimensional:</p><br>
                    <p>
                    <pre><code>$miArray = array(</code></pre>
                    <pre><code>    array("a", "b", "c"),</code></pre>
                    <pre><code>    array("1", "2", "3"),</code></pre>
                    <pre><code>    array("x", "y", "z")</code></pre>
                    <pre><code>);</code></pre>
                    </p><br><br>

                    <h1>OPERACIONES CON ARRAYS</h1><br>

                    <p>1. Acceder a elementos individuales:</p><br>
                    <p>Puedes acceder a elementos específicos en un array utilizando su índice numérico o su clave
                        asociativa.</p><br><br>

                    <p>2. Añadir elementos:</p><br>
                    <p>Puedes añadir nuevos elementos al final de un array utilizando la función:</p>
                    <pre><code>[]</code></pre>
                    <p>o la función:</p>
                    <pre><code>array_push()</code></pre>.</p><br><br>

                    <p>3. Acceder a elementos individuales:</p><br>
                    <p>Puedes eliminar elementos de un array utilizando las funciones:</p>
                    <pre><code>unset()</code></pre>
                    <p>o la función:</p>
                    <pre><code>array_splice()</code></pre>.</p><br><br>

                    <p>4. Contar elementos:</p><br>
                    <p>Puedes contar el número de elementos en un array utilizando la función:</p>
                    <pre><code>count()</code></pre><br><br>

                    <p>5. Recorrer el array:</p><br>
                    <p>Puedes recorrer un array utilizando bucles como:</p>
                    <pre><code>foreach, for</code></pre>
                    <p>ó:</p>
                    <pre><code>while</code></pre>.</p>
                    <p>para acceder a cada elemento individualmente.</p><br><br>

                    <p>6. Ordenar el array:</p><br>
                    <p>Puedes ordenar un array en orden ascendente o descendente utilizando funciones como:</p>
                    <pre><code>sort(), rsort(), asort(), arsort()</code></pre><br><br>

                    <p>7. Filtrar elementos:</p><br>
                    <p>Puedes filtrar elementos de un array utilizando funciones como:</p>
                    <pre><code>array_filter()</code></pre>
                    <p>o construcciones de bucles condicionales.</p><br><br>

                    <p>8. Buscar elementos:</p><br>
                    <p>Puedes buscar un elemento específico en un array utilizando funciones como:</p>
                    <pre><code>in_array()</code></pre>
                    <p>ó:</p>
                    <pre><code>array_search()</code></pre>.</p><br><br>

                    <p>9. Combinar arrays:</p><br>
                    <p>Puedes combinar dos o más arrays utilizando funciones como:</p>
                    <pre><code>array_merge()</code></pre>
                    <p>o el operador</p>
                    <pre><code> +</code></pre>.</p><br><br>

                    <p>10. Dividir arrays:</p><br>
                    <p>Puedes dividir un array en varios arrays más pequeños utilizando funciones como:</p>
                    <pre><code>array_chunk()</code></pre><br><br>

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