<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function obtenerPrecio() {
    // Aquí puedes implementar la lógica para obtener el precio
    // En este ejemplo, se devuelve un precio fijo, pero deberías ajustarlo según tu aplicación
    return 119.00; // Precio de ejemplo
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $talla = $_POST["talla"];
    $cantidad = $_POST["cantidad"];

    $precio_por_talla = [
        "S" => 10,  // Precio para talla pequeña
        "M" => 12,  // Precio para talla mediana
        "L" => 15   // Precio para talla grande
    ];

    if (array_key_exists($talla, $precio_por_talla)) {
        $precio_unitario = $precio_por_talla[$talla];
        $precio_total = $precio_unitario * $cantidad;

        // Mostrar detalles de la compra
        echo "Talla: $talla<br>";
        echo "Cantidad: $cantidad<br>";
        echo "Precio Unitario: $precio_unitario USD<br>";
        echo "Precio Total: $precio_total USD<br>";

        // Mostrar el resultado del importe después de procesar la compra
        echo '<div class="resultado">';
        echo '<h3>Resultado de la Compra</h3>';
        echo '<p>Importe: $' . number_format($precio_total, 2) . ' USD</p>';
        echo '</div>';
    } else {
        echo "Talla no válida.";
    }
}
?>