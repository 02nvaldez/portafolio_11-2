<title>Descuentos por Puntos Acumulados</title>
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
                        <th scope="col">Puntos</th>
                        <th scope="col">Descuento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">-</th>
                        <td>Menos de 100</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <th scope="row">-</th>
                        <td>Mayor a 100 y menor a 150</td>
                        <td>12%</td>
                    </tr>
                    <tr>
                        <th scope="row">-</th>
                        <td>Igual a 150</td>
                        <td>15%</td>
                    </tr>
                    <tr>
                        <th scope="row">-</th>
                        <td>Mas de 150</td>
                        <td>20%</td>
                    </tr>
                </tbody>
            </table>
            <br><br><br>
            <div class="form">
                <form method="POST" action="">

                    <div class="mb-3">
                        <label for="numero" class="form-label">Valor de la compra </label>
                        <input type="number" class="form-control" id="valor" name="valor">
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Puntos Acumulados</label>
                        <input type="number" class="form-control" id="puntos" name="puntos">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Compra</button>
                    <br><br><br>
                </form>
            </div>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor = $_POST['valor'];
                $puntos = $_POST['puntos'];
                if ($puntos<100) {
                    $descuento = ($valor * 10)/100;
                    $total= $valor - $descuento;
                    echo "precio original: $valor  <br>";
                    echo "descuento: 10%";
                    echo "<h2>El valor total de la compra con el 10% de descuento es $total</h2>";
                } elseif ($puntos>=100 && $puntos<150) {
                    $descuento = ($valor * 12)/100;
                    $total= $valor - $descuento;
                    echo "precio original: $valor  <br>";
                    echo "descuento: 12%";
                    echo "<h2>El valor total de la compra con el 12% de descuento es $total</h2>";
                } elseif ($puntos==150) {
                    $descuento = ($valor * 15)/100;
                    $total= $valor - $descuento;
                    echo "precio original: $valor  <br>";
                    echo "descuento: 15%";
                    echo "<h2>El valor total de la compra con el 15% de descuento es $total</h2>";
                } elseif ($puntos>150) {
                    $descuento = ($valor * 20)/100;
                    $total= $valor - $descuento;
                    echo "precio original: $valor  <br>";
                    echo "descuento: 20%";
                    echo "<h2>El valor total de la compra con el 20% de descuento es $total</h2>";
                }
                
            }
            ?>

        </center>
    </section>
</main>
<?php 
include("footer.php");
?>