    <title>Acseso</title>

    <?php 
        include("head.php");
    ?>
    <section class="contenedor todo-php">
        <br><br><br>
        <center>
            <?php
        function generarNumeroAleatorio() {
            return rand(1, 100);
        }

        $numeros = array();
        foreach (range(1, 5) as $i) {
            $numero = generarNumeroAleatorio();
            $cuadrado = pow($numero, 2);
            $cubo = pow($numero, 3);
            $numeros[] = array('numero' => $numero, 'cuadrado' => $cuadrado, 'cubo' => $cubo);
        }

        echo "<h2>Números aleatorios, cuadrados y cubos</h2>";
        echo "<table class='tabla' border='1'>";
        echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
        foreach ($numeros as $numero) {
            echo "<tr>";
            echo "<td>{$numero['numero']}</td>";
            echo "<td>{$numero['cuadrado']}</td>";
            echo "<td>{$numero['cubo']}</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </center><br>
    </section>

    </main>

    <style>


.tabla {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.tabla th,
.tabla td {
    padding: 12px;
    text-align: left;
}

.tabla th {
    background-color: #f2f2f2;
}

.tabla tr:nth-child(even) {
    background-color: #f8f8f8;
}


</style>

    <?php 
    include("footer.php");
    ?>