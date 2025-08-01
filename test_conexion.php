<?php
// Incluye el archivo de conexión
include 'conexion.php';

// Verifica si la conexión fue exitosa
if ($conn) {
    echo "¡Conexión a la base de datos exitosa!";
    // Opcional: Intenta hacer una consulta simple para asegurarte de que todo va bien
    // $result = $conn->query("SELECT 1");
    // if ($result) {
    //     echo "<br>Consulta de prueba ejecutada con éxito.";
    // } else {
    //     echo "<br>Error al ejecutar consulta de prueba: " . $conn->error;
    // }
} else {
    echo "Error: La conexión a la base de datos no se estableció.";
}

// Cierra la conexión (aunque se cerrará automáticamente al finalizar el script)
$conn->close();
?>