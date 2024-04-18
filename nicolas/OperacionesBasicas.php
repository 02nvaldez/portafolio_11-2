<title>Operaciones Básicas - PHP</title>
<?php 
        include("head.php");
    ?>

<center>
    <?php

        $n1 = 5;
        $n2 = 2;

        $suma = $n1 + $n2;
        $resta = $n1 - $n2;
        $multiplicacion = $n1 * $n2;
        $division = $n1 / $n2;

        echo "<p>El numero 1 es $n1 y el numero 2 es $n2 </p>";
        echo "<p>n1 + n2 = $suma</p>";
        echo "<p>n1 - n2 = $resta</p>";
        echo "<p>n1 * n2 = $multiplicacion</p>";
        echo "<p>n1 / n2 = $division</p>";

        ?>
</center>
<?php 
include("footer.php");
?>