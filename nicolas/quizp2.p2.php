<title>Quiz segundo periodo - 2</title>

<?php 
        include("head.php");
    ?>
<section class="contenedor todo-php">
    <br><br><br>
    <center>
         <?php
         
        $productos = array("Manzana" => 2.5,"Plátano" => 1.8,"Naranja" => 3.2,"Pera" => 2.0);
        $producto_mas_caro = "";

        $precio_mas_alto = 0;

        foreach ($productos as $producto => $precio) {

            if ($precio > $precio_mas_alto) {

                $precio_mas_alto = $precio;

                $producto_mas_caro = $producto;

            }

        }

        echo "<h4>La fruta más cara es $producto_mas_caro, con un precio de: $precio_mas_alto <h4>";            

         ?>

    </center><br>
</section>
</main>

<?php 
include("footer.php");
?>