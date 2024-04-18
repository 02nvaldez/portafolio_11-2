<title>Acseso</title>

<?php 
        include("head.php");
    ?>
<section class="contenedor todo-php">
    <br><br><br>
    <center>
        <?php
            $ciudadesColombia = array(
                array ("Bogotá", "Cundinamarca"),
                array ("Medellin", "Antioquia"),
                array ("Barranquilla", "Atlántico")
            );
            echo"<h2>Capitales de Colombia</h2>";
            echo"<p>Número de ciudades : " .count($ciudadesColombia) . "</p>";

            echo"<table class='tabla' border='1'> ";
            echo"<tr><th>Ciudad</th><th>Departamento</th><tr>";

            foreach($ciudadesColombia as $ciudad){
                echo"<tr>";
                foreach($ciudad as $detale){
                    echo "<td>$detale</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>
    </center><br>
</section>
</main>

<style>


.tabla {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.tabla th,
.tabla td {
    padding: 12px;
    text-align: left;
}

.tabla th {
    background-color: #f2f2f2;
}

.tabla tr:nth-child(even) {
    background-color: #f8f8f8;
}


</style>



<?php 
include("footer.php");
?>