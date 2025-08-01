<?php
session_start();
include 'conexion.php';

/* Verifica si se envio el formulario */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;

    $entidad_receptora = $conn->real_escape_string($_POST['entidad_receptora'] ?? '');

    // Empleo Actual
    $actual_empresa = $conn->real_escape_string($_POST['actual_empresa'] ?? '');
    $actual_tipo_empresa = $conn->real_escape_string($_POST['actual_tipo_empresa'] ?? '');
    $actual_pais = $conn->real_escape_string($_POST['actual_pais'] ?? '');
    $actual_departamento = $conn->real_escape_string($_POST['actual_departamento'] ?? '');
    $actual_municipio = $conn->real_escape_string($_POST['actual_municipio'] ?? '');
    $actual_correo_entidad = $conn->real_escape_string($_POST['actual_correo_entidad'] ?? '');
    $actual_telefonos = $conn->real_escape_string($_POST['actual_telefonos'] ?? '');
    $actual_fecha_ingreso = $conn->real_escape_string($_POST['actual_fecha_ingreso'] ?? '');
    $actual_fecha_retiro = $conn->real_escape_string($_POST['actual_fecha_retiro'] ?? '');
    $actual_cargo = $conn->real_escape_string($_POST['actual_cargo'] ?? '');
    $actual_dependencia = $conn->real_escape_string($_POST['actual_dependencia'] ?? '');
    $actual_direccion = $conn->real_escape_string($_POST['actual_direccion'] ?? '');

    // Empleo Anterior 1
    $anterior_1_empresa = $conn->real_escape_string($_POST['anterior_1_empresa'] ?? '');
    $anterior_1_tipo_empresa = $conn->real_escape_string($_POST['anterior_1_tipo_empresa'] ?? '');
    $anterior_1_pais = $conn->real_escape_string($_POST['anterior_1_pais'] ?? '');
    $anterior_1_departamento = $conn->real_escape_string($_POST['anterior_1_departamento'] ?? '');
    $anterior_1_municipio = $conn->real_escape_string($_POST['anterior_1_municipio'] ?? '');
    $anterior_1_correo_entidad = $conn->real_escape_string($_POST['anterior_1_correo_entidad'] ?? '');
    $anterior_1_telefonos = $conn->real_escape_string($_POST['anterior_1_telefonos'] ?? '');
    $anterior_1_fecha_ingreso = $conn->real_escape_string($_POST['anterior_1_fecha_ingreso'] ?? '');
    $anterior_1_fecha_retiro = $conn->real_escape_string($_POST['anterior_1_fecha_retiro'] ?? '');
    $anterior_1_cargo = $conn->real_escape_string($_POST['anterior_1_cargo'] ?? '');
    $anterior_1_dependencia = $conn->real_escape_string($_POST['anterior_1_dependencia'] ?? '');
    $anterior_1_direccion = $conn->real_escape_string($_POST['anterior_1_direccion'] ?? '');

    // Empleo Anterior 2
    $anterior_2_empresa = $conn->real_escape_string($_POST['anterior_2_empresa'] ?? '');
    $anterior_2_tipo_empresa = $conn->real_escape_string($_POST['anterior_2_tipo_empresa'] ?? '');
    $anterior_2_pais = $conn->real_escape_string($_POST['anterior_2_pais'] ?? '');
    $anterior_2_departamento = $conn->real_escape_string($_POST['anterior_2_departamento'] ?? '');
    $anterior_2_municipio = $conn->real_escape_string($_POST['anterior_2_municipio'] ?? '');
    $anterior_2_correo_entidad = $conn->real_escape_string($_POST['anterior_2_correo_entidad'] ?? '');
    $anterior_2_telefonos = $conn->real_escape_string($_POST['anterior_2_telefonos'] ?? '');
    $anterior_2_fecha_ingreso = $conn->real_escape_string($_POST['anterior_2_fecha_ingreso'] ?? '');
    $anterior_2_fecha_retiro = $conn->real_escape_string($_POST['anterior_2_fecha_retiro'] ?? '');
    $anterior_2_cargo = $conn->real_escape_string($_POST['anterior_2_cargo'] ?? '');
    $anterior_2_dependencia = $conn->real_escape_string($_POST['anterior_2_dependencia'] ?? '');
    $anterior_2_direccion = $conn->real_escape_string($_POST['anterior_2_direccion'] ?? '');

    // Empleo Anterior 3
    $anterior_3_empresa = $conn->real_escape_string($_POST['anterior_3_empresa'] ?? '');
    $anterior_3_tipo_empresa = $conn->real_escape_string($_POST['anterior_3_tipo_empresa'] ?? '');
    $anterior_3_pais = $conn->real_escape_string($_POST['anterior_3_pais'] ?? '');
    $anterior_3_departamento = $conn->real_escape_string($_POST['anterior_3_departamento'] ?? '');
    $anterior_3_municipio = $conn->real_escape_string($_POST['anterior_3_municipio'] ?? '');
    $anterior_3_correo_entidad = $conn->real_escape_string($_POST['anterior_3_correo_entidad'] ?? '');
    $anterior_3_telefonos = $conn->real_escape_string($_POST['anterior_3_telefonos'] ?? '');
    $anterior_3_fecha_ingreso = $conn->real_escape_string($_POST['anterior_3_fecha_ingreso'] ?? '');
    $anterior_3_fecha_retiro = $conn->real_escape_string($_POST['anterior_3_fecha_retiro'] ?? '');
    $anterior_3_cargo = $conn->real_escape_string($_POST['anterior_3_cargo'] ?? '');
    $anterior_3_dependencia = $conn->real_escape_string($_POST['anterior_3_dependencia'] ?? '');
    $anterior_3_direccion = $conn->real_escape_string($_POST['anterior_3_direccion'] ?? '');

    /* Consulta SQL para insertar los datos */
    $sql = "INSERT INTO experiencia_laboral (
                id_usuario, entidad_receptora,
                actual_empresa, actual_tipo_empresa, actual_pais, actual_departamento, actual_municipio, actual_correo_entidad, actual_telefonos, actual_fecha_ingreso, actual_fecha_retiro, actual_cargo, actual_dependencia, actual_direccion,
                anterior_1_empresa, anterior_1_tipo_empresa, anterior_1_pais, anterior_1_departamento, anterior_1_municipio, anterior_1_correo_entidad, anterior_1_telefonos, anterior_1_fecha_ingreso, anterior_1_fecha_retiro, anterior_1_cargo, anterior_1_dependencia, anterior_1_direccion,
                anterior_2_empresa, anterior_2_tipo_empresa, anterior_2_pais, anterior_2_departamento, anterior_2_municipio, anterior_2_correo_entidad, anterior_2_telefonos, anterior_2_fecha_ingreso, anterior_2_fecha_retiro, anterior_2_cargo, anterior_2_dependencia, anterior_2_direccion,
                anterior_3_empresa, anterior_3_tipo_empresa, anterior_3_pais, anterior_3_departamento, anterior_3_municipio, anterior_3_correo_entidad, anterior_3_telefonos, anterior_3_fecha_ingreso, anterior_3_fecha_retiro, anterior_3_cargo, anterior_3_dependencia, anterior_3_direccion
            ) VALUES (
                ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )";

    /* Preparar la declaración */
    $stmt = $conn->prepare($sql);

    /* Vincular parámetros
    Ajusta la cadena de tipos 's' segun el número de campos y si son strings, enteros, etc.
    's' para string, 'i' para integer, 'd' para double, 'b' para blob */
    $stmt->bind_param("issssssssssssssssssssssssssssssssssssssssssssss",
        $id_usuario, $entidad_receptora,
        $actual_empresa, $actual_tipo_empresa, $actual_pais, $actual_departamento, $actual_municipio, $actual_correo_entidad, $actual_telefonos, $actual_fecha_ingreso, $actual_fecha_retiro, $actual_cargo, $actual_dependencia, $actual_direccion,
        $anterior_1_empresa, $anterior_1_tipo_empresa, $anterior_1_pais, $anterior_1_departamento, $anterior_1_municipio, $anterior_1_correo_entidad, $anterior_1_telefonos, $anterior_1_fecha_ingreso, $anterior_1_fecha_retiro, $anterior_1_cargo, $anterior_1_dependencia, $anterior_1_direccion,
        $anterior_2_empresa, $anterior_2_tipo_empresa, $anterior_2_pais, $anterior_2_departamento, $anterior_2_municipio, $anterior_2_correo_entidad, $anterior_2_telefonos, $anterior_2_fecha_ingreso, $anterior_2_fecha_retiro, $anterior_2_cargo, $anterior_2_dependencia, $anterior_2_direccion,
        $anterior_3_empresa, $anterior_3_tipo_empresa, $anterior_3_pais, $anterior_3_departamento, $anterior_3_municipio, $anterior_3_correo_entidad, $anterior_3_telefonos, $anterior_3_fecha_ingreso, $anterior_3_fecha_retiro, $anterior_3_cargo, $anterior_3_dependencia, $anterior_3_direccion
    );

    if ($stmt->execute()) {

        header("Location: pagina3.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Acceso no válido al script de procesamiento.";
}

$conn->close();
?>