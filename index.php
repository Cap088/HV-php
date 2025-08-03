<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de vida en PHP Pagina 1</title>
    <link rel="stylesheet" href="Styles-index.css">
</head>
<body>
    <div class="contenedorGeneral-pagina1">
        <form action="process_hoja_de_vida_pagina1.php" method="POST" enctype="multipart/form-data">
            <div class="header">
                <!-- He cambiado la imagen por una de placeholder para que el ejemplo funcione -->
                <img src="https://placehold.co/100x100/A0B2C4/FFFFFF?text=Escudo" class="imgEscudo" name="escudo_colombia" alt="Escudo de Colombia">
                <div class="tituloHeader">
                    <p class="par H1">FORMATO ÚNICO</p>
                    <h1>HOJA DE VIDA</h1>
                    <p class="par H2">Persona Natural</p>
                    <p class="par H3">(Leyes 190 de 1995, 489 y 443 de 1998)</p>
                </div>
                <div class="inputHeader">
                    <p>ENTIDAD RECEPTORA</p>
                    <input type="text" name="entidad_receptora" id="entidad_receptora">
                    <div class="cargar-foto">
                        <label for="cargar_foto">Cargar Foto </label><input type="file" name="cargar_foto" id="cargar_foto">
                    </div>
                </div>
            </div>
            
            <!-- Aquí he agregado un "id" a la sección principal de "Datos Personales" -->
            <div class="indices ind1">
                <a href="#datos-personales" class="indice d1">1</a>
                <a href="#datos-personales" class="indice d2">DATOS PERSONALES</a>
            </div>
            <div class="formulario-f1">
                <section id="datos-personales" class="seccion-datos-personales">
                    <div class="campo-tabla1">
                        <table class="tabla t1">
                            <thead>
                                <tr>
                                    <th><label for="primer_apellido">PRIMER APELLIDO</label>
                                        <input type="text" name="primer_apellido" id="primer_apellido">
                                    </th>
                                    <th><label for="segundo_apellido">SEGUNDO APELLIDO ( O DE CASADA )</label>
                                        <input type="text" name="segundo_apellido" id="segundo_apellido">
                                    </th>
                                    <th><label for="nombres">NOMBRES</label>
                                        <input type="text" name="nombres" id="nombres">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label>DOCUMENTO DE IDENTIFICACIÓN</label>
                                        <br>
                                        <label for="cc">C.C<input type="radio" name="tipo_documento" id="cc" value="CC"></label>
                                        <label for="ce">C.E<input type="radio" name="tipo_documento" id="ce" value="CE"></label>
                                        <label for="pas">PAS<input type="radio" name="tipo_documento" id="pas" value="PAS"></label>
                                        <label for="num_identificacion">No:<input type="text" name="numero_identificacion" id="num_identificacion"></label>
                                    </td>
                                    <td>
                                        <div class="campo-sexo">
                                            <label for="SEXO">SEXO</label>
                                            <br>
                                            <label for="genero_f">F</label><input type="radio" name="sexo" class="radio-si" id="genero_f" value="Femenino">
                                            <label for="genero_m">M</label><input type="radio" name="sexo" class="radio-no" id="genero_m" value="Masculino">
                                        </div>
                                    </td>
                                    <td>
                                        <label for="nacionalidad">NACIONALIDAD</label>
                                        <br>
                                        <label for="n_colombiano">COL</label><input type="radio" name="nacionalidad" class="n-colombiano" id="n_colombiano" value="Colombiano">
                                        <label for="n_extranjero">EXTRANJERO</label><input type="radio" name="nacionalidad" class="n-extranjero" id="n_extranjero" value="Extranjero">
                                        <label for="pais_nacionalidad">PAIS:</label><input type="text" name="pais_nacionalidad" id="pais_nacionalidad">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="libreta_militar">LIBRETA MILITAR</label>
                                        <br>
                                        <label for="tipo_libreta_primera">PRIMERA CLASE</label><input type="radio" name="clase_libreta_militar" id="tipo_libreta_primera" value="Primera Clase">
                                        <label for="tipo_libreta_segunda">SEGUNDA CLASE</label><input type="radio" name="clase_libreta_militar" id="tipo_libreta_segunda" value="Segunda Clase">
                                        <label for="numero_libreta">NÚMERO</label><input type="text" name="numero_libreta" id="numero_libreta">
                                        <label for="distrito_militar">D.M</label><input type="text" name="distrito_militar">
                                    </td>
                                    <td>
                                        <label for="expedicion">LUGAR DE EXPEDICIÓN</label>
                                        <br>
                                        <label for="pais_expedicion">PAIS</label><input type="text" name="pais_expedicion" id="pais_expedicion">
                                        <label for="depto_expedicion">DEPTO</label><input type="text" name="depto_expedicion" id="depto_expedicion">
                                    </td>
                                    <td>
                                        <label for="municipio_expedicion">MUNICIPIO</label><input type="text" name="municipio_expedicion">
                                        <br>
                                        <label for="fecha_expedicion">FECHA</label><input type="date" name="fecha_expedicion" id="fecha_expedicion">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="campo-tabla2">
                        <table class="tabla t2">
                            <thead>
                                <tr>
                                    <th colspan="3">FECHA Y LUGAR DE NACIMIENTO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3"><label for="fecha_nacimiento">FECHA</label>
                                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="pais_nacimiento">PAIS</label><input type="text" name="pais_nacimiento" id="pais_nacimiento">
                                    </td>
                                    <td>
                                        <label for="departamento_nacimiento">DEPTO</label><input type="text" name="departamento_nacimiento" id="depto_nacimiento">
                                    </td>
                                    <td>
                                        <label for="municipio_nacimiento">MUNICIPIO</label><input type="text" name="municipio_nacimiento">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="tabla t3">
                            <thead>
                                <tr>
                                    <th colspan="3">DIRECCIÓN DE CORRESPONDENCIA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <input type="text" name="direccion_correspondencia" id="direccion_correspondencia">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="pais_correspondencia">PAIS</label><input type="text" name="pais_correspondencia" id="pais_correspondencia">
                                        <br>
                                        <label for="depto_correspondencia">DEPTO</label><input type="text" name="depto_correspondencia" id="depto_correspondencia">
                                    </td>
                                    <td>
                                        <label for="municipio_correspondencia">MUNICIPIO</label><input type="text" name="municipio_correspondencia" id="municipio_correspondencia">
                                    </td>
                                    <td>
                                        <label for="telefono">TELÉFONO</label><input type="text" name="telefono" id="telefono_correspondencia">
                                        <br>
                                        <label for="email">EMAIL</label><input type="email" name="email" id="email_correspondencia">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <!-- Aquí he agregado un "id" a la sección principal de "Formación Académica" -->
            <div class="indices ind1">
                <a href="#formacion-academica" class="indice d1">2</a>
                <a href="#formacion-academica" class="indice d2">FORMACIÓN ACADÉMICA</a>
            </div>
            <div class="formulario-educacion">
                <section id="formacion-academica" class="seccion-educacion-basica">
                    <div class="campo-tabla4">
                        <table class="tabla t4">
                            <thead>
                                <tr>
                                    <th colspan="3">
                                        <p>EDUCACIÓN BÁSICA</p>
                                    </th>
                                    <th>
                                        <label for="titulo_obtenido">TÍTULO OBTENIDO:</label><input type="text" name="titulo_obtenido">
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p>PRIMARIA</p>
                                    </th>
                                    <th>
                                        <p>SECUNDARIA</p>
                                    </th>
                                    <th>
                                        <p>MEDIA</p>
                                    </th>
                                    <th colspan="2">
                                        <p>FECHA DE GRADO</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="grados-primaria">
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_1" value="1o."> 1o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_2" value="2o."> 2o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_3" value="3o."> 3o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_4" value="4o."> 4o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_5" value="5o."> 5o.</label>
                                    </td>
                                    <td class="grados-secundaria">
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_6" value="6o."> 6o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_7" value="7o."> 7o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_8" value="8o."> 8o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_9" value="9o."> 9o.</label>
                                    </td>
                                    <td>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_10" value="10o."> 10o.</label>
                                        <label><input type="radio" name="grado_basica_finalizado" id="grado_11" value="11o."> 11o.</label>
                                    </td>
                                    <td colspan="2" class="fecha-grado">
                                        MES / AÑO
                                        <span class="date-box">
                                            <input type="date" name="fecha_grado_basica" class="date-text-input">
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <div class="campo-educacion-superior">
                    <div class="titulo-educacion-superior">
                        <p>EDUCACIÓN SUPERIOR (PREGRADO Y POSTGRADO)</p>
                        <p>DILIGENCIE ESTE PUNTO EN ESTRICTO ORDEN CRONOLÓGICO, EN MODALIDAD ACADÉMICA ESCRIBA:</p>
                    </div>
                    <div class="campo-niveles-superior">
                        <nav class="lista-niveles-superior">
                            <ul><b>TC</b> (TECNICA),</ul>
                            <ul><b>TL</b> (TECNOLOGICA),</ul>
                            <ul><b>TE</b> (TECNOLÓGICA ESPECIALIZADA),</ul>
                            <ul><b>UN</b>(UNIVERSITARIA),</ul>
                            <ul><b>ES</b> (ESPECIALIZACIÓN),</ul>
                            <ul><b>MG</b> (MAESTRÍA O MAGISTER),</ul>
                            <ul><b>DOC</b>(DOCTORADO O PHD),</ul>
                        </nav>
                    </div>
                    <div class="titulo-educacion-superior2">
                        <p>RELACIONE AL FRENTE EL NÚMERO DE LA TARJETA PROFESIONAL (SI ÉSTA HA SIDO PREVISTA EN UNA LEY).</p>
                    </div>
                    <div class="seccion-superior2">
                        <section class="campo-niveles-superior2">
                            <div class="niveles-tabla1">
                                <table class="tabla-niveles">
                                    <thead>
                                        <tr class="titulos-tabla">
                                            <th rowspan="2">MODALIDAD<br>ACADEMICA</th> <th colspan="1">No.SEMESTRES</th>
                                            <th colspan="2">GRADUADO</th>
                                            <th rowspan="2">NOMBRE DE LOS ESTUDIOS O TÍTULO OBTENIDO</th>
                                            <th colspan="2">TERMINACIÓN</th>
                                            <th rowspan="2">No. DE TARJETA PROFESIONAL</th>
                                        </tr>
                                        <tr class="titulos-tabla">
                                            <th>APROBADOS</th>
                                            <th>SI</th>
                                            <th>NO</th>
                                            <th colspan="2">FECHA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="superior_1_modalidad"></td>
                                            <td><input type="number" name="superior_1_semestres"></td>
                                            <td><input type="radio" name="superior_1_graduado" value="si"></td>
                                            <td><input type="radio" name="superior_1_graduado" value="no"></td>
                                            <td><input type="text" name="superior_1_estudios"></td>
                                            <td colspan="2"><input type="date" name="superior_1_mes_terminacion"></td>
                                            <td><input type="text" name="superior_1_tarjeta_profesional"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="superior_2_modalidad"></td>
                                            <td><input type="number" name="superior_2_semestres"></td>
                                            <td><input type="radio" name="superior_2_graduado" value="si"></td>
                                            <td><input type="radio" name="superior_2_graduado" value="no"></td>
                                            <td><input type="text" name="superior_2_estudios"></td>
                                            <td colspan="2"><input type="date" name="superior_2_mes_terminacion"></td>
                                            <td><input type="text" name="superior_2_tarjeta_profesional"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="superior_3_modalidad"></td>
                                            <td><input type="number" name="superior_3_semestres"></td>
                                            <td><input type="radio" name="superior_3_graduado" class="si" value="si"></td>
                                            <td><input type="radio" name="superior_3_graduado" class="no" value="no"></td>
                                            <td><input type="text" name="superior_3_estudios"></td>
                                            <td colspan="2"><input type="date" name="superior_3_mes_terminacion"></td>
                                            <td><input type="text" name="superior_3_tarjeta_profesional"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="superior_4_modalidad"></td>
                                            <td><input type="number" name="superior_4_semestres"></td>
                                            <td><input type="radio" name="superior_4_graduado" class="si" value="si"></td>
                                            <td><input type="radio" name="superior_4_graduado" class="no" value="no"></td>
                                            <td><input type="text" name="superior_4_estudios"></td>
                                            <td colspan="2"><input type="date" name="superior_4_mes_terminacion"></td>
                                            <td><input type="text" name="superior_4_tarjeta_profesional"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="superior_5_modalidad"></td>
                                            <td><input type="number" name="superior_5_semestres"></td>
                                            <td><input type="radio" name="superior_5_graduado" class="si" value="si"></td>
                                            <td><input type="radio" name="superior_5_graduado" class="no" value="no"></td>
                                            <td><input type="text" name="superior_5_estudios"></td>
                                            <td colspan="2"><input type="date" name="superior_5_mes_terminacion"></td>
                                            <td><input type="text" name="superior_5_tarjeta_profesional"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <section class="campo-idiomas">
                            <div class="titulo-idiomas">
                                <p>ESPECÍFIQUE LOS IDIOMAS DIFERENTES AL ESPAÑOL QUE:
                                    HABLA, LEE, ESCRIBE DE FORMA, REGULAR (R), BIEN (B) O MUY BIEN (MB)</p>
                            </div>
                            <div class="subcampo-idiomas">
                                <table class="tabla-idiomas">
                                    <thead class="titulos-idiomas">
                                        <tr>
                                            <th rowspan="2" class="bordes-ti1">IDIOMA</th>
                                            <th colspan="3">LO HABLA</th>
                                            <th colspan="3">LO LEE</th>
                                            <th colspan="3" class="bordes-ti2">LO ESCRIBE</th>
                                        </tr>
                                        <tr>
                                            <th>R</th>
                                            <th>B</th>
                                            <th>MB</th>
                                            <th>R</th>
                                            <th>B</th>
                                            <th>MB</th>
                                            <th>R</th>
                                            <th>B</th>
                                            <th>MB</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cuerpo-tabla-idiomas">
                                        <tr>
                                            <td><input type="text" name="idioma_1_nombre"></td>
                                            <td><input type="radio" name="idioma_1_habla" value="R"></td>
                                            <td><input type="radio" name="idioma_1_habla" value="B"></td>
                                            <td><input type="radio" name="idioma_1_habla" value="MB"></td>
                                            <td><input type="radio" name="idioma_1_lee" value="R"></td>
                                            <td><input type="radio" name="idioma_1_lee" value="B"></td>
                                            <td><input type="radio" name="idioma_1_lee" value="MB"></td>
                                            <td><input type="radio" name="idioma_1_escribe" value="R"></td>
                                            <td><input type="radio" name="idioma_1_escribe" value="B"></td>
                                            <td><input type="radio" name="idioma_1_escribe" value="MB"></td>
                                        </tr>
                                        <tr>
                                            <td class="bordes-ti3"><input type="text" name="idioma_2_nombre"></td>
                                            <td><input type="radio" name="idioma_2_habla" value="R"></td>
                                            <td><input type="radio" name="idioma_2_habla" value="B"></td>
                                            <td><input type="radio" name="idioma_2_habla" value="MB"></td>
                                            <td><input type="radio" name="idioma_2_lee" value="R"></td>
                                            <td><input type="radio" name="idioma_2_lee" value="B"></td>
                                            <td><input type="radio" name="idioma_2_lee" value="MB"></td>
                                            <td><input type="radio" name="idioma_2_escribe" value="R"></td>
                                            <td><input type="radio" name="idioma_2_escribe" value="B"></td>
                                            <td class="bordes-ti4"><input type="radio" name="idioma_2_escribe" value="MB"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="boton-pagina-siguiente1">
                <button type="submit">Página Siguiente</button>
            </div>
            <div class="numero-pagina">
                <p>Página 1</p>
            </div>
        </form>
    </div>
</body>
</html>
