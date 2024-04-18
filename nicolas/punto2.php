<title>Par o Impar</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <div class="form">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Ingrese el número</label>
                        <input type="number" class="form-control" id="numero" name="numero">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <br><br><br>
                </form>
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $numero = $_POST['numero'];
                    
                    if (($numero % 2) == 0) {
                        echo "<div class='positivo'><h1>El numero es par</h1></div>";
                    } else {
                        echo "<div class='negativo'><h1>El numero es inpar</h1></div>";
                    }
                    
                }
            ?>
            </div>
        </center>
    </section>
</main>
<?php 
include("footer.php");
?>