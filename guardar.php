<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Asegurar que se recibieron los datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que todos los campos existen
    if (isset($_POST["nombre"], $_POST["password"], $_POST["correo"])) {
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];
        $correo = $_POST["correo"];

        // Insertar en la base de datos
        $ingreso = "INSERT INTO WIWI(usuario, pass, correo) VALUES('$nombre', '$password', '$correo')";

        if (mysqli_query($conexion, $ingreso)) {
            echo ' Usuario guardado con éxito.';
        } else {
            echo ' Error al guardar usuario: ' . mysqli_error($conexion);
        }
    } else {
        echo "Faltan datos del formulario.";
    }
} else {
    echo "Acceso no permitido.";
}

// Cerrar conexión
mysqli_close($conexion);
?>
