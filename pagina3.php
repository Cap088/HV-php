<?php
/* Iniciar sesión */
session_start();

/* Obtener el ID de la persona directamente de la SESIÓN */
$id_persona = isset($_SESSION['id_persona']) ? intval($_SESSION['id_persona']) : null;

/* Si no hay un ID, redirigir al inicio para evitar errores */
if ($id_persona === null) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de vida en PHP Pagina 3</title>
    <link rel="stylesheet" href="Styles-pagina3.css">
</head>
<body>
    <div class="contenedorGeneral-pagina3">
        <form action="process_hoja_de_vida_pagina3.php" method="post" class="formulario-pagina3">
            <!-- ¡IMPORTANTE! Campo oculto para pasar el ID de la persona al siguiente script -->
            <input type="hidden" name="id_persona" value="<?php echo htmlspecialchars($id_persona); ?>">

            <div class="header">
                <img src="./images/Captura.PNG" class="imgEscudo" name="Escudo-Colombia" alt="Escudo de Colombia">
                <div class="tituloHeader">
                    <p class="par H1">FORMATO UNICO</p>
                    <h1>HOJA DE VIDA</h1>
                    <p class="par H2">Persona Natural</p>
                    <p class="par H3">(Leyes 190 de 1995, 489 y 443 de 1998)</p>
                </div>
            </div>
            <div class="indices ind1">
                <button type="button" class="indice d1">4</button>
                <button type="button" class="indice d2">FIRMA DEL SERVIDOR PÚBLICO O CONTRATISTA</button>
            </div>
            <section class="seccion1-pagina3">
                <div>
                    <p>MANIFIESTO BAJO LA GRAVEDAD DEL JURAMENTO: ME ENCUENTRO DENTRO DE LAS
                        CAUSALES DE INHABILIDAD E INCOMPATIBILIDAD DEL ORDEN CONSTITUCIONAL O LEGAL,
                        PARA EJERCER CARGOS EMPLEOS PÚBLICOS O PARA CELEBRAR
                        CONTRATOS DE PRESTACIÓN DE SERVICIOS CON LA ADMINISTRACIÓN PÚBLICA.</p>
                    <label for="consentimiento_si">SI<input type="radio" name="consentimiento_incompatibilidad" id="consentimiento_si" value="si"></label>
                    <label for="consentimiento_no">NO<input type="radio" name="consentimiento_incompatibilidad" id="consentimiento_no" value="no"></label>
                </div>
                <div>
                    <p>PARA TODOS LOS EFECTOS LEGALES, CERTIFICO QUE LOS DATOS POR MI ANOTADOS EN EL PRESENTE FORMATO ÚNICO DE HOJA DE VIDA, SON
                    VERACES, (ARTÍCULO 5o. DE LA LEY 190/95).</p>
                </div>
                <div class="campo-firma1">
                    <input type="text" name="firma_servidor_publico" id="firma_servidor_publico">
                    <label for="firma_servidor_publico">FIRMA DEL SERVIDOR PÚBLICO O CONTRATISTA</label>
                </div>
            </section>
            <div class="indices ind1">
                <button type="button" class="indice d1">5</button>
                <button type="button" class="indice d2">OBSERVACIONES DEL JEFE DE RECURSOS HUMANOS Y/O CONTRATOS</button>
            </div>
            <section class="seccion2-pagina3">
                <div class="campo-observaciones">
                    <textarea name="observaciones_rh" id="campo_observaciones"></textarea>
                </div>
                <div>
                    <p>CERTIFICO QUE LA INFORMACIÓN AQUÍ SUMINISTRADA HA SIDO CONSTATADA
                    FRENTE A LOS DOCUMENTOS QUE HAN SIDO PRESENTADOS COMO SOPORTE.</p>
                </div>
                <div class="campo-firma2">
                    <input type="text" name="firma_jefe_personal" id="firma_jefe_personal">
                    <label for="firma_jefe_personal">NOMBRE Y FIRMA DEL JEFE DE PERSONAL O DE CONTRATOS</label>
                </div>
            </section>
            <div class="boton-pagina-siguiente3">
                <button type="button" onclick="location.href='pagina2.php'">Página Anterior</button>
                <button type="submit">FINALIZAR Y ENVIAR</button>
            </div>
            <div class="numero-pagina">
                <p>Página 3</p>
            </div>
        </form>
    </div>
</body>
</html>
