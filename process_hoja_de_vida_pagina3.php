<?php
// Iniciar la sesión para poder acceder a variables de sesión
session_start();

// Desactivar temporalmente la visualización de errores para el usuario final
ini_set('display_errors', 0);

// Configuración de la base de datos (usa tus credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoja_de_vida_db";

// 1. Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// 2. Obtener el ID de la persona del formulario (POST)
// La página 3 envía el ID como un campo oculto, por lo tanto, se debe leer de $_POST.
$id_persona = isset($_POST['id_persona']) ? intval($_POST['id_persona']) : 0;
if ($id_persona === 0) {
    die("Error: No se proporcionó un ID de persona válido. El formulario no se pudo procesar.");
}

// 3. Obtener y sanitizar los datos del formulario (POST)
$consentimiento_incompatibilidad = $_POST['consentimiento_incompatibilidad'] ?? '';
$firma_servidor_publico = $_POST['firma_servidor_publico'] ?? '';
$observaciones_rh = $_POST['observaciones_rh'] ?? '';
$firma_jefe_personal = $_POST['firma_jefe_personal'] ?? '';

// 4. Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO declaraciones_finales (
    id_persona, consentimiento_incompatibilidad, firma_servidor_publico,
    observaciones_rh, firma_jefe_personal
) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

// 5. Vincular los parámetros y ejecutar la consulta
// "issss" indica: i (integer) para id_persona, y s (string) para los demás campos
$stmt->bind_param("issss",
    $id_persona,
    $consentimiento_incompatibilidad,
    $firma_servidor_publico,
    $observaciones_rh,
    $firma_jefe_personal
);

if (!$stmt->execute()) {
    die("Error al guardar los datos finales: " . $stmt->error);
}

// 6. Cerrar la conexión
$stmt->close();
$conn->close();

// 7. Limpiar la sesión y redirigir a la página de confirmación
// Destruimos la sesión porque el proceso ha terminado
session_destroy();

// Redirigimos al usuario a la página de confirmación final
header("Location: confirmacion_final.php");
exit();
