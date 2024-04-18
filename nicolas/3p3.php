<title>Acseso</title>

<?php 
        include("head.php");
    ?>
<section class="contenedor todo-php">
    <br><br><br>
    <center>
        <?php
        $numeros = array();
        for ($i = 0; $i < 10; $i++) {
            $numeros[] = rand(1, 100);
        }

        $pares = array();
        $impares = array();

        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }

        echo "<h2>Números Pares:</h2>";
        echo "<pre>";
        print_r($pares);
        echo "</pre>";

        echo "<h2>Números Impares:</h2>";
        echo "<pre>";
        print_r($impares);
        echo "</pre>";
        ?>
    </center><br>
</section>


</main>

<?php 
    include("footer.php");
    ?>