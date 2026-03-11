<?php
require 'conexion.php';

try {

$sql = "

CREATE TABLE IF NOT EXISTS public.contactos (

id SERIAL PRIMARY KEY,

nombre VARCHAR(100) NOT NULL,

correo VARCHAR(120) NOT NULL,

telefono VARCHAR(20),

mensaje TEXT NOT NULL,

fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE INDEX IF NOT EXISTS idx_contactos_correo
ON public.contactos(correo);

";

$conn->exec($sql);

echo "<h2>✔ Tabla 'contactos' creada o verificada correctamente</h2>";

echo "<p>El sistema de formulario ahora puede guardar mensajes.</p>";

} catch (PDOException $e) {

echo "<h3>Error al crear la tabla:</h3>";
echo $e->getMessage();

}
?>
