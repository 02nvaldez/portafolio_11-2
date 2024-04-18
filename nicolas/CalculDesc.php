<title>Calculadora de descuento</title>
<?php 
        include("head.php");
    ?>
<center>
    <form method="post">
        <br><br>
        <label for="monto">Ingrese el monto total de la compra</label>
        <br><br>
        <input type="text" name="monto" id="monto">
        <br><br>
        <input class="button-87" type="submit" value="Calcular">
    </form>
    <br><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
            $monto = $_POST["monto"];
                $total = $monto;
                
                if($monto>= 100){
                    $total=$total-(($monto*10)/100);
                    echo "El descuento es de el 10%, el precio es de $$monto  y con el descuento es de $$total"  ;
                } elseif ($monto>= 50 && $monto<100){
                    $total=$total-(($monto*5)/100);
                    echo "El descuento es de el 5%, el precio es de $$monto  y con el descuento es de $$total"  ;
                } elseif ($monto< 50){
                    echo "No hay descuento aplicado, total: $monto"  ;
                }
            }
            ?>
</center>

<?php 
include("footer.php");
?>