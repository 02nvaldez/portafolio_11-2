<title>Entradas</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Edad</th>
                        <th scope="col">Valor de entrada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">-</th>
                        <td>Menor de 4 años</td>
                        <td>GRATIS</td>
                    </tr>
                    <tr>
                        <th scope="row">-</th>
                        <td>Entre 4 y 18 años</td>
                        <td>$5.000</td>
                    </tr>
                    <tr>
                        <th scope="row">-</th>
                        <td>Mayor de 18 años</td>
                        <td>$10.000</td>
                    </tr>
                </tbody>
            </table>
            <br><br><br>
            <div class="form">
                <form method="POST" action="">

                    <div class="mb-3">
                        <label for="numero" class="form-label">Edad del cliente </label>
                        <input type="number" class="form-control" id="edad" name="edad">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Entrada</button>
                    <br><br><br>
                </form>
            </div>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $edad = $_POST['edad'];
                 if ($edad<4) {
                    echo "<h2>El menor ingresa gratis</h2>";
                }elseif ($edad>= 4 && $edad<=18) {
                    echo "<h2>Paga $5.000</h2>";
                }elseif ($edad>18) {
                    echo "<h2>El adulto paga $10.000</h2>";
                }
            }
            ?>


        </center>
    </section>
</main>
<?php 
include("footer.php");
?>