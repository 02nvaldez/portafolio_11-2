<title>Acseso</title>

<?php 
        include("head.php");
    ?>
<section class="contenedor">
    <center>
        <h1>Insertar Valores en un Arreglo</h1>

        <form method="POST">
            <div class="mb-3">
                <label for="numero" class="form-label">Inserta un número:</label>
                <input type="number" class="form-control" id="numero" name="numero">
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Inserta un número:</label>
                <input type="number" class="form-control" id="numero" name="numero">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>

        <?php
// Inicializar un arreglo vacío
$arreglo = array();

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado por el usuario
    $numero = $_POST["numero"];

    // Verificar si el número es válido
    if (!empty($numero)) {
        // Agregar el número al arreglo
        $arreglo[] = $numero;
    } else {
        echo "<p>Por favor, ingresa un número válido.</p>";
    }
}

// Mostrar el arreglo actualizado
if (!empty($arreglo)) {
    echo "<h2>Arreglo Actualizado:</h2>";
    echo "<pre>";
    print_r($arreglo);
    echo "</pre>";
}
?>
    </center>
</section>


</main>

<?php 
include("footer.php");
?>