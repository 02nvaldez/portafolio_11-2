<title>Facturas Meses</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>

            <?php
$facturasGeneradas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_clientes']) && isset($_POST['num_meses'])) {
    $numClientes = $_POST['num_clientes'];
    $numMeses = $_POST['num_meses'];
    $cliente = 1;

    do {

        for ($mes = 1; $mes <= $numMeses; $mes++) {

            $montoFactura = 500;
            $facturasGeneradas[] = "Factura del cliente $cliente para el mes $mes: \$" . number_format($montoFactura, 2);
        }
        $cliente++;
    } while ($cliente <= $numClientes);
}
?>

            <center>
                <h1>Generación de Facturas Mensuales</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="num_clientes">Número de Clientes:</label>
                    <input type="number" name="num_clientes" id="num_clientes" min="1" required><br><br>
                    <label for="num_meses">Número de Meses:</label>
                    <input type="number" name="num_meses" id="num_meses" min="1" required><br><br>
                    <input type="submit" value="Generar Facturas">
                </form>

                <?php if (!empty($facturasGeneradas)): ?>
                <h2>Facturas Generadas</h2>
                <ul>
                    <?php foreach ($facturasGeneradas as $factura): ?>
                    <li><?php echo $factura; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </center>
    </section>
</main>
<?php 
include("footer.php");
?>