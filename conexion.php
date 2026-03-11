<?php

/*
CONEXIÓN A POSTGRESQL EN RENDER
Compatible con:
- guardar_contacto.php
- ver_mensajes.php
- crear_tabla.php
*/

$databaseUrl = getenv('DATABASE_URL');

if (!$databaseUrl) {
    die("Error: DATABASE_URL no está definida en Render.");
}

$db = parse_url($databaseUrl);

$host = $db['host'] ?? '';
$port = $db['port'] ?? '5432';
$user = $db['user'] ?? '';
$pass = $db['pass'] ?? '';
$dbname = isset($db['path']) ? ltrim($db['path'], '/') : '';

if (!$host || !$user || !$dbname) {
    die("Error: Datos de conexión incompletos.");
}

try {

    $conn = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

} catch (PDOException $e) {

    die("Error de conexión a la base de datos: " . $e->getMessage());

}

?>
