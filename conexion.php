<?php
$servidor = LAPTOP-27FSTFC5\SQLEXPRESS;
$usuario = sa;
$password = 12345678;
$base_datos = tienda-gorros;

$conexion = new mysqli($LAPTOP-27FSTFC5\SQLEXPRESS, $sa, $12345678, $tienda-gorros);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
