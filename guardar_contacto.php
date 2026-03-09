<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nombre   = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$correo   = isset($_POST['correo']) ? trim($_POST['correo']) : '';
$telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
$mensaje  = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

if ($nombre == "" || $correo == "" || $mensaje == "") {
header("Location: index.php?error=1");
exit();
}

try {

$sql = "INSERT INTO public.contactos (nombre, correo, telefono, mensaje)
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

} catch (PDOException $e) {

echo "Error al guardar: " . $e->getMessage();

}

}
?>
