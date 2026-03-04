<?php

$databaseUrl = getenv('DATABASE_URL');

if (!$databaseUrl) {
    die("DATABASE_URL no está definida.");
}

$db = parse_url($databaseUrl);

$host = $db['host'] ?? null;
$port = $db['port'] ?? 5432; // Puerto por defecto de PostgreSQL
$user = $db['user'] ?? null;
$pass = $db['pass'] ?? null;
$dbname = isset($db['path']) ? ltrim($db['path'], '/') : null;

if (!$host || !$user || !$dbname) {
    die("Error leyendo DATABASE_URL.");
}

try {
    $conn = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
