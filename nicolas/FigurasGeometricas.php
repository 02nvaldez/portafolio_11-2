<title>Figuras Geométricas - PHP</title>
<?php 
        include("head.php");
    ?>
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
    <br><br>
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
    
    <?php 
include("footer.php");
?>