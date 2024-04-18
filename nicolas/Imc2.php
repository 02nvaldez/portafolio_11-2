<title>IMC 2 - PHP</title>
<?php 
        include("head.php");
    ?>
<center>
    <h2>Indice de Masa Corporal</h2>
    <br>
    <form action="Imc2.php" method="POST">
        <form method="post">
            <br>
            <label for="peso">Ingrese el peso</label>
            <input type="text" name="peso" id="peso">
            <br><br>
            <label for="altura">Ingrese la altura</label>
            <input type="text" name="altura" id="altura">
            <br><br>
            <input class="button-87" type="submit" value="Calcular">
            <br><br>
        </form>


</center>
<center>
    <?php
        if ($_POST) {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = $peso / ($altura*$altura);
            echo "<p>El imc es de $imc </p>";
        }
        ?>
    <br>
    <br>
    <img src="imagenes/file.jpg" border="0" />
</center>

<?php 
include("footer.php");
?>