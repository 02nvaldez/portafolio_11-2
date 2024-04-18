<title>Menú Restaurante</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <div class="form">
                <h1>Menú:</h1>
                <br>
                <form method="POST" action="">
                    <label for="proteina" class="form-label">¿Qué proteina va a escoger?</label>
                    <select name="proteina" class="form-select" aria-label="Default select example">
                        <option selected>Proteinas</option>
                        <option value="1" name="pollo">Pollo ($4.800)</option>
                        <option value="2" name="cerdo">Cerdo ($5.000)</option>
                        <option value="3" name="res">Res ($5.500)</option>
                    </select>
                    <br><br>
                    <label for="sopa" class="form-label">Sopa</label>
                    <select name="sopa" class="form-select" aria-label="Default select example">
                        <option selected>Proteinas</option>
                        <option value="1" name="sopa">Con sopa ($1.000)</option>
                        <option value="2" name="sinsopa">Sin sopa ($0)</option>
                    </select>
                    <br><br>
                    <label for="proteina" class="form-label">¿Qué principio va a escoger?</label>
                    <select name="principio" class="form-select" aria-label="Default select example">
                        <option selected>Principio</option>
                        <option value="1" name="frijoles">Fríjoles ($5.000)</option>
                        <option value="2" name="lentejas">Lentejas ($5.500)</option>
                        <option value="3" name="blanquillos">Blanquillos ($4.500)</option>
                        <option value="4" name="ensalada">Ensalada ($4.800)</option>
                    </select>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <br><br><br>
                </form>
                <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $proteina = $_POST['proteina'];
    $principio = $_POST['principio'];
    $sopa = $_POST['sopa'];

    $precioprot = 0;
    $preciosop = 0;
    $precioprin = 0;

    switch ($proteina) {
        case '1':
            $precioprot = 4800;
            switch ($sopa) {
                case '1':
                    $preciosop = 1000;
                    break;
                case '2':
                    $preciosop = 0;
                    break;
            }
            switch ($principio) {
                case '1':
                    $precioprin = 5000;
                    break;
                case '2':
                    $precioprin = 5500;
                    break;
                case '3':
                    $precioprin = 4500;
                    break;
                case '4':
                    $precioprin = 4800;
                    break;
            }
            break;

        case '2':
            $precioprot = 5000;
            switch ($sopa) {
                case '1':
                    $preciosop = 1000;
                    break;
                case '2':
                    $preciosop = 0;
                    break;
            }
            switch ($principio) {
                case '1':
                    $precioprin = 5000;
                    break;
                case '2':
                    $precioprin = 5500;
                    break;
                case '3':
                    $precioprin = 4500;
                    break;
                case '4':
                    $precioprin = 4800;
                    break;
            }
            break;

        case '3':
            $precioprot = 5500;
            switch ($sopa) {
                case '1':
                    $preciosop = 1000;
                    break;
                case '2':
                    $preciosop = 0;
                    break;
            }
            switch ($principio) {
                case '1':
                    $precioprin = 5000;
                    break;
                case '2':
                    $precioprin = 5500;
                    break;
                case '3':
                    $precioprin = 4500;
                    break;
                case '4':
                    $precioprin = 4800;
                    break;
            }
            break;

        default:
            echo "Seleccione alguna opción ";
            break;
    }

    $total = $precioprin + $precioprot + $preciosop;
    echo "<h1>El precio del almuerzo es de $$total <h1>";
}
?>


            </div>
        </center>
    </section>
</main>
<?php 
include("footer.php");
?>