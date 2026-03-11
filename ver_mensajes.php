<?php
require 'conexion.php';

try {

$sql = "SELECT * FROM public.contactos ORDER BY fecha DESC";
$stmt = $conn->query($sql);
$mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

echo "Error: " . $e->getMessage();
exit();

}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Mensajes Recibidos</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
padding:40px;
}

h1{
text-align:center;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th,td{
padding:12px;
border:1px solid #ddd;
}

th{
background:#0d1b2a;
color:white;
}

tr:nth-child(even){
background:#f2f2f2;
}

</style>

</head>

<body>

<h1>Mensajes del Formulario</h1>

<table>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Mensaje</th>
<th>Fecha</th>
</tr>

<?php foreach($mensajes as $m): ?>

<tr>

<td><?= $m['id'] ?></td>

<td><?= htmlspecialchars($m['nombre']) ?></td>

<td><?= htmlspecialchars($m['correo']) ?></td>

<td><?= htmlspecialchars($m['telefono']) ?></td>

<td><?= htmlspecialchars($m['mensaje']) ?></td>

<td><?= $m['fecha'] ?></td>

</tr>

<?php endforeach; ?>

</table>

</body>
</html>
