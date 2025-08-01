<?php
session_start(); // Inicia la sesión para acceder a variables de sesión (como el ID del usuario)
include 'conexion.php'; // Incluye tu archivo de conexión a la base de datos

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegúrate de que el ID del usuario esté en la sesión
    $id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;

    if ($id_usuario === null) {
        // Manejar el caso donde no hay un ID de usuario en la sesión
        echo "Error: No se encontró el ID de usuario en la sesión. Por favor, complete la primera parte del formulario.";
        // Opcional: Redirigir al usuario a la página de inicio
        // header("Location: index.php");
        // exit();
    }

    // Recopila y escapa los datos del formulario
    $entidad_receptora_p3 = $conn->real_escape_string($_POST['entidad_receptora_p3'] ?? '');
    $consentimiento_incompatibilidad = $conn->real_escape_string($_POST['consentimiento_incompatibilidad'] ?? '');
    $firma_servidor_publico = $conn->real_escape_string($_POST['firma_servidor_publico'] ?? '');
    $observaciones_rh = $conn->real_escape_string($_POST['observaciones_rh'] ?? '');
    $firma_jefe_personal = $conn->real_escape_string($_POST['firma_jefe_personal'] ?? '');

    $sql = "INSERT INTO hoja_vida_finalizacion (
                id_usuario, entidad_receptora_p3, consentimiento_incompatibilidad,
                firma_servidor_publico, observaciones_rh, firma_jefe_personal
            ) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("isssss",
        $id_usuario,
        $entidad_receptora_p3,
        $consentimiento_incompatibilidad,
        $firma_servidor_publico,
        $observaciones_rh,
        $firma_jefe_personal
    );

    // Ejecutar la declaración
    if ($stmt->execute()) {
        // Opcional: Destruir la sesión si la hoja de vida se ha completado
        // session_destroy();

        // Redirigir a una página de confirmación o de éxito final
        header("Location: confirmacion_final.php"); // Puedes crear este archivo
        exit();
    } else {
        echo "Error al guardar los datos de la página 3: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
} else {
    echo "Acceso no válido al script de procesamiento de la página 3.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>