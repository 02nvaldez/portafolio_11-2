<title>Gestión de Productos en un Supermercado</title>
<?php 
        include("head.php");
    ?>
<main>
    <section class="contenedor todo-php">
        <center>
            <?php 

// Crear un arreglo asociativo con los productos en el inventario
$inventario = [
    1 => [
        "nombre" => "Leche",
        "precio" => 1.50,
        "stock" => 50
    ],
    2 => [
        "nombre" => "Pan",
        "precio" => 2.00,
        "stock" => 80
    ],
    3 => [
        "nombre" => "Huevos",
        "precio" => 3.00,
        "stock" => 100
    ],
    4 => [
        "nombre" => "Carne",
        "precio" => 5.00,
        "stock" => 75
    ],
    5 => [
        "nombre" => "Pescado",
        "precio" => 4.50,
        "stock" => 60
    ]
];

// Mostrar la lista de productos disponibles con su precio y stock
echo "<h2>Lista de productos disponibles:</h2>\n<br>";
foreach ($inventario as $producto) {
    echo "<h4>Nombre:</h4> {$producto['nombre']}, <h4>Precio:</h4> {$producto['precio']}, <h4>Stock:</h4> {$producto['stock']}\n<br>";
}

// Agregar un nuevo producto al inventario
$nombreNuevoProducto = readline("Ingrese el nombre del nuevo producto: ");
$precioNuevoProducto = readline("Ingrese el precio del nuevo producto: ");
$stockNuevoProducto = readline("Ingrese la cantidad en stock del nuevo producto: ");
$nuevoProducto = [
    "nombre" => $nombreNuevoProducto,
    "precio" => $precioNuevoProducto,
    "stock" => $stockNuevoProducto
];
$ultimoId = max(array_keys($inventario));
$inventario[$ultimoId + 1] = $nuevoProducto;

// Mostrar la lista actualizada de productos disponibles con su precio y stock
echo "<h2>Lista de productos disponibles actualizada:</h2>\n<br>";
foreach ($inventario as $producto) {
    echo "<h4>Nombre:</h4> {$producto['nombre']}, <h4>Precio:</h4> {$producto['precio']}, <h4>Stock:</h4> {$producto['stock']}\n<br>";
}

?>
        </center>
    </section>
</main>
<?php 
include("footer.php");
?>