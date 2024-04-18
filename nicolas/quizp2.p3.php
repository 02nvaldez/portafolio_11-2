<title>Quiz segundo periodo - 3</title>

<?php 
        include("head.php");
    ?>
<section class="contenedor todo-php">
    <br><br><br>
    <center>

    <form action="" method="post">
        <input class="campotexto" type="text" name="productos" id="productos" placeholder="nombre del producto">
        <br><br>
        <input class="campotexto" type="number" name="cant" id="cant" placeholder="cantidad del producto">
        <br><br>
        <input class="button-87" type="submit" value="Imprimir">
    </form>

    <?php 

    if ($_SERVER["REQUEST_METHOD"]== "POST") {

        $producton = $_POST["productos"];
        $cant = $_POST["cant"];

         
    
        $productos = array($producton => $cant);

        foreach ($productos as $producton => $cant){
            echo $producton ." tiene " . $cant . " cantidades.";
        }

    }



    ?>

    </center><br>
</section>
</main>

<?php 
include("footer.php");
?>