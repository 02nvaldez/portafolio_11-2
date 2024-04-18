<title>Mayor o Menor</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <div class="form">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Ingrese el número 1 </label>
                        <input type="number" class="form-control" id="numero" name="numero1">
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Ingrese el número 2 </label>
                        <input type="number" class="form-control" id="numero" name="numero2">
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Ingrese el número 3 </label>
                        <input type="number" class="form-control" id="numero" name="numero3">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <br><br><br>
                </form>
                <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];
                
                $mayor = max($numero1, $numero2, $numero3);
                $menor = min($numero1, $numero2, $numero3);
                $medio = $numero1 + $numero2 + $numero3 - $mayor - $menor;
                
                echo "<div class='resultado'>";
                echo "<div class='mayor'><h1>El numero mayor es $mayor</h1></div>";
                echo "<div class='menor'><h1>El numero menor es $menor</h1></div>";
                echo "<div class='medio'><h1>El numero del medio es $medio</h1></div>";
                
                if ($numero1 == $numero2 && $numero2 == $numero3) {
                    echo "<div class='cero'><h1>Los tres números son iguales.</h1></div>";
                }
                echo "</div>";
            }
            ?>

            </div>
        </center>
    </section>
</main>
<?php 
include("footer.php");
?>