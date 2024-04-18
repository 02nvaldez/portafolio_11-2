<title>Lista de Tareas</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>

            <?php

$tareas = [
   1 => "Estudiar para el examen de Física <br><p>",
   2 => "Leer el capítulo 5 del libro de Programación<br><p>",
   3 => "Escribir el ensayo de Literatura<br><p>",
   4 => "Preparar la presentación de Historia<br><p>",
   5 => "Realizar los ejercicios de Matemáticas<br><br>"
];

echo "<h3>Lista de tareas pendientes:<br><p></h3>";
foreach ($tareas as $numero => $tarea) {
   echo "{$numero}. {$tarea}\n<br><p>";
}

$numeroTarea = readline("<h3>Selecciona una tarea por su número: <br><p></h3>");
if (isset($tareas[$numeroTarea])) {
   unset($tareas[$numeroTarea]);
}

echo "<h3>\nLista de tareas pendientes actualizada:\n<br><p></h3>";
foreach ($tareas as $numero => $tarea) {
   echo "{$numero}. {$tarea}\n<br><p>";
}

?>

        </center>
    </section>
</main>
<?php 
include("footer.php");
?>