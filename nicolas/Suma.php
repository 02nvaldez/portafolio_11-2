<title>Suma - PHP</title>
<?php 
        include("head.php");
    ?>
<center>
    <h2>Suma de 2 numeros en PHP</h2>
    <br>
    <form action="Suma.php" method="POST">
        <form method="post">
            <br>
            <label for="numero1">Ingrese el numero 1</label>
            <input type="text" name="numero1" id="numero1">
            <br><br>
            <label for="numero2">Ingrese el numero 2</label>
            <input type="text" name="numero2" id="numero2">
            <br><br>
            <input class="button-87" type="submit" value="Sumar">
            <br><br>
        </form>


</center>
<center>
    <?php
        if ($_POST) {
            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
            $suma = $num1 + $num2;
            echo "La suma de $num1 y $num2 es: $suma";
        }
        ?>
</center>
<?php 
include("footer.php");
?>