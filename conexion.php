<?php
$servidor = LAPTOP-27FSTFC5\SQLEXPRESS;
$usuario = LAPTOP-27FSTFC5\Joe RC;
$password = "tu_contraseña";
$base_datos = "tu_base_de_datos";

$conexion = new mysqli($LAPTOP-27FSTFC5\SQLEXPRESS, LAPTOP-27FSTFC5\Joe RC, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
