<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, correo, telefono, mensaje) 
        VALUES (:nombre, :correo, :telefono, :mensaje)";

$stmt = $conn->prepare($sql);
$stmt->execute([
    ':nombre' => $nombre,
    ':correo' => $correo,
    ':telefono' => $telefono,
    ':mensaje' => $mensaje
]);

header("Location: index.php?success=1");
exit();
