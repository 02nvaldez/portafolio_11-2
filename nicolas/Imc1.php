<title>IMC 1 - PHP</title>
<?php 
        include("head.php");
    ?>

<center>
    <?php

        $peso = 65;
        $altura = 1.69;
        $altura2 = $altura*$altura;

        $imc = $peso / $altura2;

        echo "<p>El peso es: $peso</p>";
        echo "<p>La altura es $altura y la altura al cuadrado es $altura2</p>";
        echo "<p>El IMC es: $imc</p>";
        ?>
    <br>
    <br>
    <img src="imagenes/file.jpg" border="0" />


</center>

<?php 
include("footer.php");
?>