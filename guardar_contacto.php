<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

$nombre   = trim($_POST['nombre'] ?? '');
$correo   = trim($_POST['correo'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$mensaje  = trim($_POST['mensaje'] ?? '');

/* VALIDAR CAMPOS */

if (empty($nombre) || empty($correo) || empty($mensaje)) {

header("Location: index.php?error=campos_vacios");
exit();

}

/* VALIDAR CORREO */

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

header("Location: index.php?error=correo_invalido");
exit();

}

try {

/* INSERTAR MENSAJE */

$sql = "INSERT INTO public.contactos
(nombre, correo, telefono, mensaje, fecha)
VALUES
(:nombre, :correo, :telefono, :mensaje, NOW())";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':telefono', $telefono);
$stmt->bindParam(':mensaje', $mensaje);

$stmt->execute();

/* REDIRECCION EXITOSA */

header("Location: index.php?success=1");
exit();

} catch (PDOException $e) {

/* ERROR CONTROLADO */

header("Location: index.php?error=bd");
exit();

}

}
?>
