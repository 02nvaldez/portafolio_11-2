<title>Ventas Diarias</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <div class='form'>
                <h1>Registro de Ventas Diarias</h1><br><br>
                <form method='POST' action='punto1.php'>
                    <div class='input-group flex-nowrap'>
                        <span class='input-group-text' id='addon-wrapping'>Ventas del día</span>
                        <input type='number' class='form-control' aria-describedby='addon-wrapping' id='ventas'
                            name='ventas'>
                    </div><br>
                    <button type='submit' class='btn btn-primary'>Registrar</button>
                    <br><br><br>
                </form>
            </div>

            <?php
    $totalVentas = 0;
    $dia = 0;
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ventas'])) {
        do {
            $ventasDia = $_POST['ventas'];
            $totalVentas += $ventasDia;
            $dia++;
            echo "<br>Dia: $dia ";
            echo "<br>Total acumulado de Ventas Semanal: $$totalVentas <br>";
        
    } while ($dia < 7);
            
        }



    
    ?>

        </center>
    </section>
</main>
<?php 
include("footer.php");
?>