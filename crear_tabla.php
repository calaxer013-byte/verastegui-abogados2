<?php
require 'conexion.php';

try {

$sql = "CREATE TABLE IF NOT EXISTS contactos (
id SERIAL PRIMARY KEY,
nombre VARCHAR(100),
correo VARCHAR(100),
telefono VARCHAR(20),
mensaje TEXT,
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->exec($sql);

echo "TABLA CREADA CORRECTAMENTE";

} catch (PDOException $e) {

echo "Error: " . $e->getMessage();

}
?>
