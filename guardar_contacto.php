<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
    $correo = mysqli_real_escape_string($conn, $_POST["correo"]);
    $telefono = mysqli_real_escape_string($conn, $_POST["telefono"]);
    $mensaje = mysqli_real_escape_string($conn, $_POST["mensaje"]);

    $sql = "INSERT INTO contactos_web (nombre, correo, telefono, mensaje)
            VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Mensaje enviado correctamente. Nos comunicaremos pronto.');
                window.location='index.php';
              </script>";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>