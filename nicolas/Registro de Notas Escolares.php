<title>Registro de Notas Escolares</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <?php

// Crear un arreglo asociativo con las notas de los estudiantes en diferentes asignaturas
$notas = [
   "estudiantes" => [
       "Juan" => ["Matematicas" => rand(0,100), "Ciencias" => rand(0,100), "Literatura" => rand(0,100)],
       "Pedro" => ["Matematicas" => rand(0,100), "Ciencias" => rand(0,100), "Literatura" => rand(0,100)],
       "Ana" => ["Matematicas" => rand(0,100), "Ciencias" => rand(0,100), "Literatura" => rand(0,100)],
       "Laura" => ["Matematicas" => rand(0,100), "Ciencias" => rand(0,100), "Literatura" => rand(0,100)]
   ]
];

// Iterar sobre los estudiantes en el arreglo
foreach ($notas["estudiantes"] as $nombre => $asignaturas) {
   echo "Estudiante: {$nombre}\n";
   echo "Matematicas: {$asignaturas["Matematicas"]}\n";
   echo "Ciencias: {$asignaturas["Ciencias"]}\n";
   echo "Literatura: {$asignaturas["Literatura"]}\n";
   echo "------------------------------\n";
}

?>

        </center>
    </section>
</main>
<?php 
include("footer.php");
?>