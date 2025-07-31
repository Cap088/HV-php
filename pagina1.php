<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de vida en PHP Pagina 1</title>
    <link rel="stylesheet" href="/Styles-pagina1.css">
</head>
<body>
    <!-- Contenedor (cuadro) principal -->
    <div class="contenedorGeneral">
        <header>
            <img src="/images/Captura.PNG" class="imgEscudo" name="Escudo-Colombia">
            <div class="tituloHeader">
                <P class="par H1">FORMATO UNICO</P>
                <h1>HOJA DE VIDA</h1>
                <P class="par H2">Persona Natural</P>
                <p class="par H3">(Leyes 190 de 1995, 489 y 443 de 1998)</p>
            </div>
            <div class="inputHeader">
                <p>ENTIDAD RECEPTORA</p>
                <input type="text" name="entidad-receptora" id="entidad_receptora">
                <input type="file" name="cargar-foto" class="foto1" id="cargar_foto">
            </div>
        </header>
        <!-- Primera seccion -->
        <div class="indices ind1">
            <button class="indice d1">1</button>
            <button class="indice d2">DATOS PERSONALES</button>
        </div>
        <!-- seccion datos personales -->
        <form class="formulario-f1">
            <section class="seccion-datos-personales">
                <div class="campo-tabla1">
                    <table class="tabla t1">
                        <thead>
                            <tr>
                                <th><label for="PRIMER APELLIDO">PRIMER APELLIDO</label>
                                    <input type="text" name="primer-apellido" id="primer_apellido">
                                </th>
                                <th><label for="SEGUNDO APELLIDO">SEGUNDO APELLIDO ( O DE CASADA )</label>
                                    <input type="text" name="segundo-apellido" id="segundo_apellido">
                                </th>
                                <th><label for="NOMBRES">NOMBRES</label>
                                    <input type="text" name="nombres" id="nombres">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">DOCUMENTO DE IDENTIFICACIÓN</label>
                                    <br>
                                    <label for="C.C">C.C<input type="radio" name="tipo-documento" id=""></label>
                                    <label for="C.E">C.E<input type="radio" name="tipo-documento" id=""></label>
                                    <label for="PAS">PAS<input type="radio" name="tipo-documento" id=""></label>
                                    <label for="No.">No:<input type="text" name="No." id="num_identificacion"></label>
                                </td>
                                <td>
                                    <div class="campo-sexo">
                                        <label for="SEXO">SEXO</label>
                                        <br>
                                        <label for="F">F</label><input type="radio" name="tipo-genero" class="radio-si" id="genero-f" value="femenino">
                                        <label for="M">M</label><input type="radio" name="tipo-genero" class="radio-no" id="genero-m" value="masculino">
                                    </div>
                                </td>
                                <td>
                                    <label for="NACIONALIDAD">NACIONALIDAD</label>
                                    <br>
                                    <label for="COL">COL</label><input type="radio" name="tipo-nacionalidad" class="n-colombiano" id="n_colombiano" value="colombiano">
                                    <label for="EXTRANJERO">EXTRANJERO</label><input type="radio" name="tipo-nacionalidad" class="n-extranjero" id="n_extranjero" value="extranjero">
                                    <label for="PAIS">PAIS:</label><input type="text" name="input-pais" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="LIBRETA MILITAR">LIBRETA MILITAR</label>
                                    <br>
                                    <label for="PRIMERA CLASE">PRIMERA CLASE</label><input type="radio" name="libreta" class="tipo-libreta" id="tipo_libreta" value="primera">
                                    <label for="SEGUNDA CLASE">SEGUNDA CLASE</label><input type="radio" name="libreta" class="tipo-libreta" id="tipo_libreta" value="segunda">
                                    <label for="NÚMERO">NÚMERO</label><input type="text" name="N-LIBRETA" id="">
                                    <label for="D.M">D.M</label><input type="text" name="D.M" id="D_M">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="campo-tabla2">
                    <table class="tabla t2">
                        <thead>
                            <tr>
                                <th>FECHA Y LUGAR DE NACIMIENTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2"><label for="FECHA">FECHA</label></td>
                                <td><input type="date" name="fecha-nacimiento" id="input-fechan"></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="PAIS">PAIS</label><input type="text" name="input-pais" id="">
                                </td>
                                <td>
                                    <label for="DEPTO">DEPTO</label><input type="text" name="DEPTO" id="input-departamento">
                                </td>
                                <td>
                                    <label for="MUNICIPIO">MUNICIPIO</label><input type="text" name="DEPTO" id="input-municipio">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="tabla t3">
                        <thead>
                            <tr>
                            <th>DIRECCIÓN DE CORRESPONDENCIA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <input type="text" name="direccion-casa" id="direccion-casa">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="PAIS">PAIS</label><input type="text" name="" id="">
                                    <br>
                                    <label for="DEPTO">DEPTO</label><input type="text" name="" id="">
                                </td>
                                <td>
                                    <label for="MUNICIPIO">MUNICIPIO</label><input type="text" name="MUNICIPIO" id="">
                                </td>
                                <td>
                                    <label for="TELEFONO">TELEFONO</label><input type="text" name="TELEFONO" id="">
                                    <br>
                                    <label for="EMAIL">EMAIL</label><input type="email" name="EMAIL" id="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </form>
        <!-- Primera seccion -->
        <div class="indices ind1">
            <button class="indice d1">2</button>
            <button class="indice d2">FORMACION ACADEMICA</button>
        </div>
        <!-- seccion formacion academica -->
        <form class="formulario-educacion">
            <section class="seccion-educacion-basica">
            <div class="campo-tabla4">
                <table class="tabla t4">
                    <thead>
                        <tr>
                            <th colspan="3">
                                <p>EDUCACIÓN BÁSICA</p>
                            </th>
                            <th>
                                <label for="TÍTULO OBTENIDO">TÍTULO OBTENIDO:</label><input type="text" name="titulo obtenido" id="titulo_obtenido">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>PRIMARIA</p>
                            </td>
                            <td>
                                <p>SECUNDARIA</p>
                            </td>
                            <td>
                                <p>MEDIA</p>
                            </td>
                            <td colspan="2">
                                <p>FECHA DE GRADO</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" class="grados-primaria">
                                    <label><input type="radio" name="grado_primaria" id="grado_1" value="1o"> 1o.</label>
                                    <label><input type="radio" name="grado_primaria" id="grado_2" value="2o"> 2o.</label>
                                    <label><input type="radio" name="grado_primaria" id="grado_3" value="3o"> 3o.</label>
                                    <label><input type="radio" name="grado_primaria" id="grado_4" value="4o"> 4o.</label>
                                    <label><input type="radio" name="grado_primaria" id="grado_5" value="5o"> 5o.</label>
                            </td>
                            <td class="grados-secundaria">
                                    <label><input type="radio" name="grado_secundaria" id="grado_6" value="6o"> 6o.</label>
                                    <label><input type="radio" name="grado_secundaria" id="grado_7" value="7o"> 7o.</label>
                                    <label><input type="radio" name="grado_secundaria" id="grado_8" value="8o"> 8o.</label>
                                    <label><input type="radio" name="grado_secundaria" id="grado_9" value="9o"> 9o.</label>
                            </td>
                            <td>
                                    <label><input type="radio" name="grado_media" id="grado_10" value="10o"> 10o.</label>
                                    <label><input type="radio" name="grado_media" id="grado_11" value="11o"> 11o.</label>
                            </td>
                        <td colspan="2" class="fecha-grado">
                            MES
                            <span class="date-box">
                                <input type="month" class="date-text-input" placeholder="---- de ---">
                                </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
                </section>
                    <!-- seccion de educacion superior -->
                    <div class="campo-educacion-superior">
                        <div class="titulo-educacion-superior">
                            <p>EDUCACION SUPERIOR (PREGRADO Y POSTGRADO)</p>
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
                        <div>
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
                                            <th>MES</th>
                                            <th>AÑO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="modalidad_1"></td>
                                            <td><input type="text" name="semestres_1"></td>
                                            <td><input type="radio" name="graduado_1" value="si"></td>
                                            <td><input type="radio" name="graduado_1" value="no"></td>
                                            <td><input type="text" name="estudios_1"></td>
                                            <td><input type="text" name="mes_terminacion_1"></td>
                                            <td><input type="text" name="anio_terminacion_1"></td>
                                            <td><input type="text" name="tarjeta_profesional_1"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="modalidad_2"></td>
                                            <td><input type="text" name="semestres_2"></td>
                                            <td><input type="radio" name="graduado_2" value="si"></td>
                                            <td><input type="radio" name="graduado_2" value="no"></td>
                                            <td><input type="text" name="estudios_2"></td>
                                            <td><input type="text" name="mes_terminacion_2"></td>
                                            <td><input type="text" name="anio_terminacion_2"></td>
                                            <td><input type="text" name="tarjeta_profesional_2"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="modalidad_3"></td>
                                            <td><input type="text" name="semestres_3"></td>
                                            <td><input type="radio" name="graduado_3" class="si" value="si"></td>
                                            <td><input type="radio" name="graduado_3" class="no" value="no"></td>
                                            <td><input type="text" name="estudios_3"></td>
                                            <td><input type="text" name="mes_terminacion_3"></td>
                                            <td><input type="text" name="anio_terminacion_3"></td>
                                            <td><input type="text" name="tarjeta_profesional_3"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="modalidad_4"></td>
                                            <td><input type="text" name="semestres_4"></td>
                                            <td><input type="radio" name="graduado_4" class="si" value="si"></td>
                                            <td><input type="radio" name="graduado_4" class="no" value="no"></td>
                                            <td><input type="text" name="estudios_4"></td>
                                            <td><input type="text" name="mes_terminacion_4"></td>
                                            <td><input type="text" name="anio_terminacion_4"></td>
                                            <td><input type="text" name="tarjeta_profesional_4"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="modalidad_5"></td>
                                            <td><input type="text" name="semestres_5"></td>
                                            <td><input type="radio" name="graduado_5" class="si" value="si"></td>
                                            <td><input type="radio" name="graduado_5" class="no" value="no"></td>
                                            <td><input type="text" name="estudios_5"></td>
                                            <td><input type="text" name="mes_terminacion_5"></td>
                                            <td><input type="text" name="anio_terminacion_5"></td>
                                            <td><input type="text" name="tarjeta_profesional_5"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <!-- seccion de la tabla de idiomas -->
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
                                        <td><input type="text" name="idioma_1"></td>
                                        <td><input type="radio" name="habla_1" value="habla_1"></td>
                                        <td><input type="radio" name="habla_1" value="habla_1"></td>
                                        <td><input type="radio" name="habla_1" value="habla_1"></td>
                                        <td><input type="radio" name="lee_1" value="lee"></td>
                                        <td><input type="radio" name="lee_1" value="lee"></td>
                                        <td><input type="radio" name="lee_1" value="lee"></td>
                                        <td><input type="radio" name="escribe_1"value="escribe" value="habla"></td>
                                        <td><input type="radio" name="escribe_1" value="escribe"></td>
                                        <td><input type="radio" name="escribe_1" value="escribe"></td>
                                    </tr>
                                    <tr>
                                        <td class="bordes-ti3"><input type="text" name="idioma_2"></td>
                                        <td><input type="radio" name="habla_2" value="habla_2"></td>
                                        <td><input type="radio" name="habla_2" value="habla_2"></td>
                                        <td><input type="radio" name="habla_2" value="habla_2"></td>
                                        <td><input type="radio" name="lee_2" value="lee_2"></td>
                                        <td><input type="radio" name="lee_2" value="lee_2"></td>
                                        <td><input type="radio" name="lee_2" value="lee_2"></td>
                                        <td><input type="radio" name="escribe_2" value="escribe_2"></td>
                                        <td><input type="radio" name="escribe_2" value="escribe_2"></td>
                                        <td class="bordes-ti4"><input type="radio" name="escribe_2" value="escribe_2"></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <input type="text">
                    </section>
                </div>
            </div>
        </form>
        <div class="boton-pagina-siguiente1">
            <button><a href="/pagina2.html">Pagína Siguiente</a></button>
        </div>
        <div class="numero-pagina">
            <p>Pagína 1</p>
        </div>
    </div>

</body>
</html>