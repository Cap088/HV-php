<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de vida en PHP Pagina 2</title>
    <link rel="stylesheet" href="Styles-pagina2.css">
</head>
<body>
    <div class="contenedorGeneral-pagina2">
        <form action="process_hoja_de_vida_pagina2.php" method="post" class="formulario-pagina2">
            <div class="header">
                <img src="./images/Captura.PNG" class="imgEscudo" name="Escudo-Colombia" alt="Escudo de Colombia">
                <div class="tituloHeader">
                    <P class="par H1">FORMATO ÚNICO</P>
                    <h1>HOJA DE VIDA</h1>
                    <P class="par H2">Persona Natural</P>
                    <p class="par H3">(Leyes 190 de 1995, 489 y 443 de 1998)</p>
                </div>
            </div>
            <div class="indices ind1">
                <button type="button" class="indice d1">3</button>
                <button type="button" class="indice d2">EXPERIENCIA LABORAL</button>
            </div>
            <div class="campo-pagina2">
                <div class="titulo-formulario1-pagina2">
                    <p>RELACIONE SU EXPERIENCIA LABORAL O DE PRESTACIÓN DE SERVICIOS
                    EN ESTRICTO ORDEN CRONOLÓGICO COMENZANDO POR EL ACTUAL</p>
                </div>
                <section class="seccion-experiencia">
                    <div class="campo-tabla1">
                        <table class="tabla t1">
                            <thead>
                                <tr>
                                    <th colspan="4">EMPLEO ACTUAL O CONTRATO VIGENTE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="actual_empresa">EMPRESA</label><input type="text" name="actual_empresa" id="actual_empresa"></td>
                                    <td class="radio-publica"><label for="actual_tipo_publica">PÚBLICA</label><input type="radio" name="actual_tipo_empresa" id="actual_tipo_publica" value="publica"></td>
                                    <td class="radio-privada"><label for="actual_tipo_privada">PRIVADA</label><input type="radio" name="actual_tipo_empresa" id="actual_tipo_privada" value="privada"></td>
                                    <td><label for="actual_pais">PAÍS</label><input type="text" name="actual_pais" id="actual_pais"></td>
                                </tr>
                                <tr>
                                    <td><label for="actual_departamento">DEPARTAMENTO</label><input type="text" name="actual_departamento" id="actual_departamento"></td>
                                    <td colspan="2"><label for="actual_municipio">MUNICIPIO</label><input type="text" name="actual_municipio" id="actual_municipio"></td>
                                    <td><label for="actual_correo_entidad">CORREO ELECTRÓNICO ENTIDAD</label><input type="text" name="actual_correo_entidad" id="actual_correo_entidad"></td>
                                </tr>
                                <tr>
                                    <td><label for="actual_telefonos">TELÉFONOS</label><input type="text" name="actual_telefonos" id="actual_telefonos"></td>
                                    <td colspan="2"><label for="actual_fecha_ingreso">FECHA DE INGRESO</label><input type="date" name="actual_fecha_ingreso" id="actual_fecha_ingreso"></td>
                                    <td><label for="actual_fecha_retiro">FECHA DE RETIRO</label><input type="date" name="actual_fecha_retiro" id="actual_fecha_retiro"></td>
                                </tr>
                                <tr>
                                    <td><label for="actual_cargo">CARGO O CONTRATO ACTUAL</label><input type="text" name="actual_cargo" id="actual_cargo"></td>
                                    <td colspan="2"><label for="actual_dependencia">DEPENDENCIA</label><input type="text" name="actual_dependencia" id="actual_dependencia"></td>
                                    <td><label for="actual_direccion">DIRECCIÓN</label><input type="text" name="actual_direccion" id="actual_direccion"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="campo-tabla2">
                        <table class="tabla t2">
                            <thead>
                                <tr>
                                    <th colspan="4">EMPLEO O CONTRATO ANTERIOR 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="anterior_1_empresa">EMPRESA</label><input type="text" name="anterior_1_empresa" id="anterior_1_empresa"></td>
                                    <td class="radio-publica"><label for="anterior_1_tipo_publica">PÚBLICA</label><input type="radio" name="anterior_1_tipo_empresa" id="anterior_1_tipo_publica" value="publica"></td>
                                    <td class="radio-privada"><label for="anterior_1_tipo_privada">PRIVADA</label><input type="radio" name="anterior_1_tipo_empresa" id="anterior_1_tipo_privada" value="privada"></td>
                                    <td><label for="anterior_1_pais">PAÍS</label><input type="text" name="anterior_1_pais" id="anterior_1_pais"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_1_departamento">DEPARTAMENTO</label><input type="text" name="anterior_1_departamento" id="anterior_1_departamento"></td>
                                    <td colspan="2"><label for="anterior_1_municipio">MUNICIPIO</label><input type="text" name="anterior_1_municipio" id="anterior_1_municipio"></td>
                                    <td><label for="anterior_1_correo_entidad">CORREO ELECTRÓNICO ENTIDAD</label><input type="text" name="anterior_1_correo_entidad" id="anterior_1_correo_entidad"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_1_telefonos">TELÉFONOS</label><input type="text" name="anterior_1_telefonos" id="anterior_1_telefonos"></td>
                                    <td colspan="2"><label for="anterior_1_fecha_ingreso">FECHA DE INGRESO</label><input type="date" name="anterior_1_fecha_ingreso" id="anterior_1_fecha_ingreso"></td>
                                    <td><label for="anterior_1_fecha_retiro">FECHA DE RETIRO</label><input type="date" name="anterior_1_fecha_retiro" id="anterior_1_fecha_retiro"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_1_cargo">CARGO O CONTRATO ACTUAL</label><input type="text" name="anterior_1_cargo" id="anterior_1_cargo"></td>
                                    <td colspan="2"><label for="anterior_1_dependencia">DEPENDENCIA</label><input type="text" name="anterior_1_dependencia" id="anterior_1_dependencia"></td>
                                    <td><label for="anterior_1_direccion">DIRECCIÓN</label><input type="text" name="anterior_1_direccion" id="anterior_1_direccion"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="campo-tabla3">
                        <table class="tabla t3">
                            <thead>
                                <tr>
                                    <th colspan="4">EMPLEO O CONTRATO ANTERIOR 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="anterior_2_empresa">EMPRESA</label><input type="text" name="anterior_2_empresa" id="anterior_2_empresa"></td>
                                    <td class="radio-publica"><label for="anterior_2_tipo_publica">PÚBLICA</label><input type="radio" name="anterior_2_tipo_empresa" id="anterior_2_tipo_publica" value="publica"></td>
                                    <td class="radio-privada"><label for="anterior_2_tipo_privada">PRIVADA</label><input type="radio" name="anterior_2_tipo_empresa" id="anterior_2_tipo_privada" value="privada"></td>
                                    <td><label for="anterior_2_pais">PAÍS</label><input type="text" name="anterior_2_pais" id="anterior_2_pais"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_2_departamento">DEPARTAMENTO</label><input type="text" name="anterior_2_departamento" id="anterior_2_departamento"></td>
                                    <td colspan="2"><label for="anterior_2_municipio">MUNICIPIO</label><input type="text" name="anterior_2_municipio" id="anterior_2_municipio"></td>
                                    <td><label for="anterior_2_correo_entidad">CORREO ELECTRÓNICO ENTIDAD</label><input type="text" name="anterior_2_correo_entidad" id="anterior_2_correo_entidad"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_2_telefonos">TELÉFONOS</label><input type="text" name="anterior_2_telefonos" id="anterior_2_telefonos"></td>
                                    <td colspan="2"><label for="anterior_2_fecha_ingreso">FECHA DE INGRESO</label><input type="date" name="anterior_2_fecha_ingreso" id="anterior_2_fecha_ingreso"></td>
                                    <td><label for="anterior_2_fecha_retiro">FECHA DE RETIRO</label><input type="date" name="anterior_2_fecha_retiro" id="anterior_2_fecha_retiro"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_2_cargo">CARGO O CONTRATO ACTUAL</label><input type="text" name="anterior_2_cargo" id="anterior_2_cargo"></td>
                                    <td colspan="2"><label for="anterior_2_dependencia">DEPENDENCIA</label><input type="text" name="anterior_2_dependencia" id="anterior_2_dependencia"></td>
                                    <td><label for="anterior_2_direccion">DIRECCIÓN</label><input type="text" name="anterior_2_direccion" id="anterior_2_direccion"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="campo-tabla4">
                        <table class="tabla t4">
                            <thead>
                                <tr>
                                    <th colspan="4">EMPLEO O CONTRATO ANTERIOR 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="anterior_3_empresa">EMPRESA</label><input type="text" name="anterior_3_empresa" id="anterior_3_empresa"></td>
                                    <td class="radio-publica"><label for="anterior_3_tipo_publica">PÚBLICA</label><input type="radio" name="anterior_3_tipo_empresa" id="anterior_3_tipo_publica" value="publica"></td>
                                    <td class="radio-privada"><label for="anterior_3_tipo_privada">PRIVADA</label><input type="radio" name="anterior_3_tipo_empresa" id="anterior_3_tipo_privada" value="privada"></td>
                                    <td><label for="anterior_3_pais">PAÍS</label><input type="text" name="anterior_3_pais" id="anterior_3_pais"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_3_departamento">DEPARTAMENTO</label><input type="text" name="anterior_3_departamento" id="anterior_3_departamento"></td>
                                    <td colspan="2"><label for="anterior_3_municipio">MUNICIPIO</label><input type="text" name="anterior_3_municipio" id="anterior_3_municipio"></td>
                                    <td><label for="anterior_3_correo_entidad">CORREO ELECTRÓNICO ENTIDAD</label><input type="text" name="anterior_3_correo_entidad" id="anterior_3_correo_entidad"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_3_telefonos">TELÉFONOS</label><input type="text" name="anterior_3_telefonos" id="anterior_3_telefonos"></td>
                                    <td colspan="2"><label for="anterior_3_fecha_ingreso">FECHA DE INGRESO</label><input type="date" name="anterior_3_fecha_ingreso" id="anterior_3_fecha_ingreso"></td>
                                    <td><label for="anterior_3_fecha_retiro">FECHA DE RETIRO</label><input type="date" name="anterior_3_fecha_retiro" id="anterior_3_fecha_retiro"></td>
                                </tr>
                                <tr>
                                    <td><label for="anterior_3_cargo">CARGO O CONTRATO ACTUAL</label><input type="text" name="anterior_3_cargo" id="anterior_3_cargo"></td>
                                    <td colspan="2"><label for="anterior_3_dependencia">DEPENDENCIA</label><input type="text" name="anterior_3_dependencia" id="anterior_3_dependencia"></td>
                                    <td><label for="anterior_3_direccion">DIRECCIÓN</label><input type="text" name="anterior_3_direccion" id="anterior_3_direccion"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="boton-pagina-siguiente2">
                <button type="button" onclick="location.href='index.php'">Página Anterior</button>
                <button type="submit">Guardar y Siguiente</button>
            </div>
            <div class="numero-pagina">
                <p>Página 2</p>
            </div>
        </form>
    </div>
</body>
</html>