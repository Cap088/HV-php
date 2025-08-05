<?php
/* 1. Incluir conexión y configuraciones iniciales */
include 'conexion.php';
session_start();

echo "<pre>=== TODOS LOS DATOS RECIBIDOS ===\n";
print_r($_POST);
print_r($_FILES);
echo "</pre>";

/* 2. Configuración de directorio para fotos */
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0750, true);
}

/* 3. Validar método de solicitud */
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

/* 4. Sanitizar y validar datos principales */
$campos_requeridos = [
    'primer_apellido', 'nombres', 'tipo_documento',
    'numero_identificacion', 'sexo', 'nacionalidad'
];

foreach ($campos_requeridos as $campo) {
    if (empty($_POST[$campo])) {
        die("El campo $campo es requerido");
    }
}

/* 5. Procesar datos personales */
$persona = [
    'entidad_receptora' => isset($_POST['entidad_receptora']) ? $conn->real_escape_string($_POST['entidad_receptora']) : null,
    'primer_apellido' => $conn->real_escape_string($_POST['primer_apellido']),
    'segundo_apellido' => isset($_POST['segundo_apellido']) ? $conn->real_escape_string($_POST['segundo_apellido']) : null,
    'nombres' => $conn->real_escape_string($_POST['nombres']),
    'tipo_documento' => $_POST['tipo_documento'],
    'numero_identificacion' => $conn->real_escape_string($_POST['numero_identificacion']),
    'sexo' => $_POST['sexo'],
    'nacionalidad' => $_POST['nacionalidad'],
    'pais_nacimiento' => isset($_POST['pais_nacimiento']) ? $conn->real_escape_string($_POST['pais_nacimiento']) : null,
    'fecha_nacimiento' => isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : null,
    'departamento_nacimiento' => isset($_POST['departamento_nacimiento']) ? $conn->real_escape_string($_POST['departamento_nacimiento']) : null,
    'municipio_nacimiento' => isset($_POST['municipio_nacimiento']) ? $conn->real_escape_string($_POST['municipio_nacimiento']) : null,
    'direccion_correspondencia' => isset($_POST['direccion_correspondencia']) ? $conn->real_escape_string($_POST['direccion_correspondencia']) : null,
    'pais_correspondencia' => isset($_POST['pais_correspondencia']) ? $conn->real_escape_string($_POST['pais_correspondencia']) : null,
    'departamento_correspondencia' => isset($_POST['depto_correspondencia']) ? $conn->real_escape_string($_POST['depto_correspondencia']) : null,
    'municipio_correspondencia' => isset($_POST['municipio_correspondencia']) ? $conn->real_escape_string($_POST['municipio_correspondencia']) : null,
    'telefono' => isset($_POST['telefono']) ? $conn->real_escape_string($_POST['telefono']) : null,
    'email' => isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : null,
    'libreta_militar_tipo' => isset($_POST['clase_libreta_militar']) ? $_POST['clase_libreta_militar'] : null,
    'libreta_militar_numero' => isset($_POST['numero_libreta']) ? $conn->real_escape_string($_POST['numero_libreta']) : null,
    'distrito_militar' => isset($_POST['distrito_militar']) ? $conn->real_escape_string($_POST['distrito_militar']) : null,
    'ruta_foto' => null
];

if (isset($_FILES['cargar_foto']) && $_FILES['cargar_foto']['error'] == UPLOAD_ERR_OK) {
    $file_info = pathinfo($_FILES['cargar_foto']['name']);
    $extension = strtolower($file_info['extension']);
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    $max_size = 2 * 1024 * 1024; // 2MB máximo

    /*  Verificar tipo y tamaño del archivo */
    if (in_array($extension, $allowed_types) && $_FILES['cargar_foto']['size'] <= $max_size) {
        $nombre_archivo_unico = uniqid('foto_') . '.' . $extension;
        $target_file = $target_dir . $nombre_archivo_unico;

        /* Verificar si es una imagen real */
        $check = getimagesize($_FILES['cargar_foto']['tmp_name']);
        if ($check !== false) {
            if (move_uploaded_file($_FILES['cargar_foto']['tmp_name'], $target_file)) {
                $persona['ruta_foto'] = $target_file;
            } else {
                error_log("Error al mover el archivo subido");
            }
        } else {
            error_log("El archivo no es una imagen válida");
        }
    } else {
        error_log("Tipo de archivo no permitido o tamaño excedido");
    }
}


/* 7. Iniciar transacción */
$conn->begin_transaction();

/* datos personales */
try {
    $sql_persona = "INSERT INTO personas (
        entidad_receptora, primer_apellido, segundo_apellido, nombres, tipo_documento, numero_identificacion,
        sexo, nacionalidad, pais_nacimiento, fecha_nacimiento, departamento_nacimiento,
        municipio_nacimiento, direccion_correspondencia, pais_correspondencia,
        departamento_correspondencia, municipio_correspondencia, telefono, email,
        libreta_militar_tipo, libreta_militar_numero, distrito_militar, ruta_foto
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt_persona = $conn->prepare($sql_persona);
    $stmt_persona->bind_param("ssssssssssssssssssssss",
        $persona['entidad_receptora'], $persona['primer_apellido'], $persona['segundo_apellido'], $persona['nombres'],
        $persona['tipo_documento'], $persona['numero_identificacion'], $persona['sexo'],
        $persona['nacionalidad'], $persona['pais_nacimiento'], $persona['fecha_nacimiento'],
        $persona['departamento_nacimiento'], $persona['municipio_nacimiento'],
        $persona['direccion_correspondencia'], $persona['pais_correspondencia'],
        $persona['departamento_correspondencia'], $persona['municipio_correspondencia'],
        $persona['telefono'], $persona['email'], $persona['libreta_militar_tipo'],
        $persona['libreta_militar_numero'], $persona['distrito_militar'], $persona['ruta_foto']
    );

    if (!$stmt_persona->execute()) {
        throw new Exception("Error al guardar datos personales: " . $stmt_persona->error);
    }
    /* bloque educacion basica */
    $id_persona = $conn->insert_id;
    $_SESSION['id_persona'] = $id_persona;
    $stmt_persona->close();

    /* 9. Procesar educación básica */
if (isset($_POST['grado_basica_finalizado'])) {
    /* Obtener y sanitizar datos */
    $grado = $_POST['grado_basica_finalizado'];

    /* Usar el nombre correcto del campo (titulo_obtenido en lugar de titulo_obtenido_basica) */
    $titulo = isset($_POST['titulo_obtenido'])
            ? trim($conn->real_escape_string($_POST['titulo_obtenido']))
            : null;

    $fecha = isset($_POST['fecha_grado_basica'])
            ? $_POST['fecha_grado_basica']
            : null;

    /* Insertar en base de datos */
    $sql_basica = "INSERT INTO educacion_basica
                (id_persona, grado, titulo_obtenido, fecha_grado)
                VALUES (?, ?, ?, ?)";

    $stmt_basica = $conn->prepare($sql_basica);
    if (!$stmt_basica) {
        error_log("Error preparando consulta: " . $conn->error);
    } else {
        $stmt_basica->bind_param("isss", $id_persona, $grado, $titulo, $fecha);

        if ($stmt_basica->execute()) {
            error_log("Educación básica insertada correctamente");
        } else {
            error_log("Error al insertar: " . $stmt_basica->error);
        }
        $stmt_basica->close();
    }
}

    /* 10. Procesar educación superior (hasta 5 registros) */
    for ($i = 1; $i <= 5; $i++) {
    if (!empty($_POST["superior_{$i}_modalidad"])) {
        try {
            /* Sanitización y validación de datos */
            $modalidad = $conn->real_escape_string($_POST["superior_{$i}_modalidad"]);
            $semestres = isset($_POST["superior_{$i}_semestres"]) ? (int)$_POST["superior_{$i}_semestres"] : null;
            $graduado = (isset($_POST["superior_{$i}_graduado"]) && $_POST["superior_{$i}_graduado"] == 'si') ? 1 : 0;
            $estudios = $conn->real_escape_string($_POST["superior_{$i}_estudios"]);
            $tarjeta = isset($_POST["superior_{$i}_tarjeta_profesional"]) ? $conn->real_escape_string($_POST["superior_{$i}_tarjeta_profesional"]) : null;

            /* Validación y formato de fecha */
            $fecha_terminacion = null;
            if (!empty($_POST["superior_{$i}_mes_terminacion"])) {
                $fecha_input = $_POST["superior_{$i}_mes_terminacion"];
                if (preg_match('/^\d{4}-\d{2}(-\d{2})?$/', $fecha_input)) {
                    /* // Acepta tanto YYYY-MM como YYYY-MM-DD */
                    $fecha_terminacion = date('Y-m-d', strtotime($fecha_input));
                }
            }

            /* Consulta SQL */
            $sql_superior = "INSERT INTO educacion_superior (
                id_persona, modalidad, semestres_aprobados, graduado,
                nombre_estudios, fecha_terminacion, tarjeta_profesional
            ) VALUES (?, ?, ?, ?, ?, ?, ?)";

            $stmt_superior = $conn->prepare($sql_superior);
            if (!$stmt_superior) {
                throw new Exception("Error preparando consulta: " . $conn->error);
            }

            $stmt_superior->bind_param("isiisss",
                $id_persona,
                $modalidad,
                $semestres,
                $graduado,
                $estudios,
                $fecha_terminacion,
                $tarjeta
            );

            if (!$stmt_superior->execute()) {
                throw new Exception("Error ejecutando consulta: " . $stmt_superior->error);
            }

            $stmt_superior->close();

        } catch (Exception $e) {
            /*  Registra el error pero permite continuar con los siguientes registros */
            error_log("Error procesando educación superior {$i}: " . $e->getMessage());
            continue;
        }
    }
}

    /* 11. Procesar idiomas (hasta 2 registros) */
    for ($i = 1; $i <= 2; $i++) {
        if (!empty($_POST["idioma_{$i}_nombre"])) {
            $idioma = $conn->real_escape_string($_POST["idioma_{$i}_nombre"]);
            $habla = isset($_POST["idioma_{$i}_habla"]) ? $_POST["idioma_{$i}_habla"] : null;
            $lee = isset($_POST["idioma_{$i}_lee"]) ? $_POST["idioma_{$i}_lee"] : null;
            $escribe = isset($_POST["idioma_{$i}_escribe"]) ? $_POST["idioma_{$i}_escribe"] : null;

            $sql_idioma = "INSERT INTO idiomas (
                id_persona, idioma, habla, lee, escribe
            ) VALUES (?, ?, ?, ?, ?)";

            $stmt_idioma = $conn->prepare($sql_idioma);
            $stmt_idioma->bind_param("issss", $id_persona, $idioma, $habla, $lee, $escribe);

            if (!$stmt_idioma->execute()) {
                throw new Exception("Error al guardar idioma {$i}: " . $stmt_idioma->error);
            }
            $stmt_idioma->close();
        }
    }

    /*  12. Confirmar transacción */
    $conn->commit();

    /* 13. Redirigir a la siguiente página */
    header("Location: pagina2.php");
    exit();

} catch (Exception $e) {
    /*  14. En caso de error, revertir transacción */
    $conn->rollback();

    /* Eliminar foto si se subió pero falló la transacción */
    if (!empty($persona['ruta_foto']) && file_exists($persona['ruta_foto'])) {
        unlink($persona['ruta_foto']);
    }

    die("Error al procesar el formulario: " . $e->getMessage());
}