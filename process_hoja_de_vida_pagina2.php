<?php
/* ¡IMPORTANTE! Iniciar la sesión para poder acceder a $_SESSION */
session_start();

/*  Desactivar temporalmente la visualización de errores para el usuario final */
ini_set('display_errors', 0);

/*  Configuración de la base de datos */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoja_de_vida_db";

/* 1. Conexión a la base de datos */
$conn = new mysqli($servername, $username, $password, $dbname);

/* Verificar la conexión */
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

/* 2. Obtener el ID de la persona desde la SESIÓN
 Ya no se busca en $_POST, sino en $_SESSION */
$id_persona = isset($_SESSION['id_persona']) ? intval($_SESSION['id_persona']) : 0;
if ($id_persona === 0) {
    /*  Si la sesión no tiene el ID, el usuario no ha pasado por la página 1.
     Redirigimos al inicio. */
    header("Location: index.php");
    exit();
}

/* 3. Preparar la consulta SQL para insertar los datos */
$sql = "INSERT INTO experiencia_laboral (id_persona, tipo, empresa, tipo_empresa, pais, departamento, municipio, correo_entidad, telefonos, fecha_ingreso, fecha_retiro, cargo, dependencia, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

/* 4. Procesar los tres bloques de experiencia laboral */
for ($i = 0; $i <= 2; $i++) {
    $prefix = ($i === 0) ? "actual_" : "anterior_" . $i . "_";
    $tipo = ($i === 0) ? "actual" : "anterior";

    $empresa = $_POST[$prefix . 'empresa'] ?? '';
    $tipo_empresa = $_POST[$prefix . 'tipo_empresa'] ?? '';
    $pais = $_POST[$prefix . 'pais'] ?? '';
    $departamento = $_POST[$prefix . 'departamento'] ?? '';
    $municipio = $_POST[$prefix . 'municipio'] ?? '';
    $correo_entidad = $_POST[$prefix . 'correo_entidad'] ?? '';
    $telefonos = $_POST[$prefix . 'telefonos'] ?? '';
    $fecha_ingreso = $_POST[$prefix . 'fecha_ingreso'] ?? '';
    $fecha_retiro = $_POST[$prefix . 'fecha_retiro'] ?? '';
    $cargo = $_POST[$prefix . 'cargo'] ?? '';
    $dependencia = $_POST[$prefix . 'dependencia'] ?? '';
    $direccion = $_POST[$prefix . 'direccion'] ?? '';

    if (!empty($empresa)) {
        $stmt->bind_param("isssssssssssss", $id_persona, $tipo, $empresa, $tipo_empresa, $pais, $departamento, $municipio, $correo_entidad, $telefonos, $fecha_ingreso, $fecha_retiro, $cargo, $dependencia, $direccion);

        if (!$stmt->execute()) {
            echo "Error al guardar el empleo " . ($i + 1) . ": " . $stmt->error . "<br>";
        }
    }
}

/* 5. Cerrar la conexión */
$stmt->close();
$conn->close();

/* 6. Redirigir a la siguiente página */
header("Location: pagina3.php?id_persona=" . $id_persona);
exit();

?>
