<title>Tabla de Multiplicar</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <div class="form">
                <form method="POST" action="">

                    <div class="mb-3">
                        <label for="numero" class="form-label">Número </label>
                        <input type="number" class="form-control" id="numero" name="numero">
                    </div>
                    <button type="submit" class="btn btn-primary">Tabla de multiplicar</button>
                    <br><br><br>
                </form>
            </div>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST['numero'];
                for ($i=0; $i <=10 ; $i++) { 
                    $total= $numero*$i;
                    echo "<p> $numero  x  $i = $total"; 
                }
                
            }
            ?>

        </center>
    </section>
</main>
<?php 
include("footer.php");
?>