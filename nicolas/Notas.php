<title>Nota Definitiva - PHP</title>
<?php 
        include("head.php");
    ?>
<center>

    <h2>Nota Definitiva</h2>
    <form action="Notas.php" method="POST">
        <table>
            <br>
            <label for="nota1">Nota 1</label>
            <input type="text" name="nota1"></td>
            </br>
            <br>
            <label for="nota2">Nota 2</label>
            <input type="text" name="nota2"></td>
            </br>
            <br>
            <label for="nota3">Nota 3</label>
            <input type="text" name="nota3"></td>
            </br>
            <br>
            <td><input class="button-87" type="submit" value="Definitiva"></td>
            </br>
        </table>
    </form>
</center>

<center>
    <?php
        if($_POST)
        {
            $nota1 = $_POST
            ['nota1'];
            $nota2 = $_POST
            ['nota2'];
            $nota3 = $_POST
            ['nota3'];
            $definitiva = ($nota1+$nota2+$nota3) / 3;
            echo "<p>La nota definitiva es $definitiva</p>";
        }

        ?>
</center>

<?php 
include("footer.php");
?>