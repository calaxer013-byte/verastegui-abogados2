<?php

$databaseUrl = getenv('DATABASE_URL');

try {
    $conn = new PDO($databaseUrl);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
