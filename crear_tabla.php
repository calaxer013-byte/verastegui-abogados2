<?php
require 'conexion.php';

try {

echo "<h2>Inicializando base de datos...</h2>";

/* CREAR TABLA */

$sqlTabla = "

CREATE TABLE IF NOT EXISTS public.contactos (

id SERIAL PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
correo VARCHAR(120) NOT NULL,
telefono VARCHAR(20),
mensaje TEXT NOT NULL,
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)

";

$conn->exec($sqlTabla);


/* CREAR ÍNDICE PARA MEJORAR BÚSQUEDA */

$sqlIndex = "

CREATE INDEX IF NOT EXISTS idx_contactos_correo
ON public.contactos(correo)

";

$conn->exec($sqlIndex);


/* MENSAJE DE CONFIRMACIÓN */

echo "<h3 style='color:green;'>✔ Tabla 'contactos' creada o verificada correctamente</h3>";

echo "<p>El formulario de contacto ya puede guardar mensajes en la base de datos.</p>";

echo "<p><b>Sistema listo.</b></p>";

} catch (PDOException $e) {

echo "<h3 style='color:red;'>Error al crear la tabla:</h3>";
echo $e->getMessage();

}
?>
