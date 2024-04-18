<title>Área Triángulo - PHP</title>
<?php 
        include("head.php");
    ?>

<center>
    <?php

        $base = 5;
        $altura = 8;

        $area = ($base*$altura) / 2;

        echo "<p>La base del triángulo es: $base </p>";
        echo "<p>La altura del triángulo es: $altura </p>";
        echo "<p>El área del triángulo es: $area </p>";
        ?>
</center>

<?php 
include("footer.php");
?>