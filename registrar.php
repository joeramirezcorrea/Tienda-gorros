<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

if ($conexion->query($query) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>
