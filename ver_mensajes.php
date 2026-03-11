<?php
require 'conexion.php';

try {

$sql = "SELECT * FROM public.contactos ORDER BY id DESC";
$stmt = $conn->query($sql);
$mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total = count($mensajes);

} catch (PDOException $e) {

echo "Error: " . $e->getMessage();
exit();

}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Panel de Mensajes | EVL Abogados</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
font-family:Arial;
background:#f4f6f9;
margin:0;
padding:30px;
}

h1{
text-align:center;
color:#0d1b2a;
}

.dashboard{
max-width:1200px;
margin:auto;
}

.card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
margin-bottom:20px;
}

.stats{
display:flex;
justify-content:space-between;
align-items:center;
}

.stats h2{
margin:0;
color:#d4af37;
}

.search{
margin-top:15px;
}

.search input{
width:100%;
padding:10px;
border:1px solid #ccc;
border-radius:5px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

th,td{
padding:12px;
border-bottom:1px solid #eee;
}

th{
background:#0d1b2a;
color:white;
}

tr:hover{
background:#f2f2f2;
}

.badge{
background:#25D366;
color:white;
padding:4px 8px;
border-radius:4px;
font-size:12px;
}

.btn{
padding:6px 10px;
border:none;
border-radius:4px;
cursor:pointer;
font-size:12px;
}

.btn-ver{
background:#0d6efd;
color:white;
}

.btn-eliminar{
background:#dc3545;
color:white;
}

.footer{
text-align:center;
margin-top:20px;
color:#666;
}

</style>

</head>

<body>

<div class="dashboard">

<h1><i class="fas fa-envelope"></i> Mensajes del Formulario</h1>

<div class="card stats">

<div>
<h3>Total de mensajes</h3>
<h2><?= $total ?></h2>
</div>

<div>
<span class="badge">Panel Administrativo</span>
</div>

</div>

<div class="card search">

<input type="text" id="buscar" placeholder="Buscar por nombre o correo...">

</div>

<table id="tabla">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Mensaje</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>

<?php foreach($mensajes as $m): ?>

<tr>

<td><?= $m['id'] ?></td>

<td><?= htmlspecialchars($m['nombre']) ?></td>

<td><?= htmlspecialchars($m['correo']) ?></td>

<td><?= htmlspecialchars($m['telefono']) ?></td>

<td><?= htmlspecialchars($m['mensaje']) ?></td>

<td>
<?= date("d/m/Y H:i", strtotime($m['fecha'])) ?>
</td>

<td>

<button class="btn btn-ver">
<i class="fas fa-eye"></i>
</button>

<button class="btn btn-eliminar">
<i class="fas fa-trash"></i>
</button>

</td>

</tr>

<?php endforeach; ?>

</table>

<div class="footer">

EVL Abogados & Asociados © <?= date("Y") ?>

</div>

</div>

<script>

const buscar = document.getElementById("buscar");
const filas = document.querySelectorAll("#tabla tr");

buscar.addEventListener("keyup", function(){

let texto = this.value.toLowerCase();

filas.forEach((fila,i)=>{

if(i===0) return;

let contenido = fila.textContent.toLowerCase();

fila.style.display = contenido.includes(texto) ? "" : "none";

});

});

</script>

</body>
</html>
