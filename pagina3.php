<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de vida en PHP Pagina 3</title>
    <link rel="stylesheet" href="/Styles-pagina3.css">
</head>
<body>
    <div class="contenedorGeneral-pagina2">
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
                <input type="text" name="entidadrep" id="entidad-receptora">
            </div>
        </header>
        <!-- Primera seccion -->
        <div class="indices ind1">
            <button class="indice d1">4</button>
            <button class="indice d2">FIRMA DEL SERVIDOR PÚBLICO O CONTRATISTA</button>
        </div>
        <section class="seccion1-pagina3">
            <div>
                <p>MANIFIESTO BAJO LA GRAVEDAD DEL JURAMENTO:  ME ENCUENTRO DENTRO DE LAS
                    CAUSALES DE INHABILIDAD E INCOMPATIBILIDAD DEL ORDEN CONSTITUCIONAL O LEGAL,
                    PARA EJERCER CARGOS EMPLEOS PÚBLICOS O PARA CELEBRAR
                    CONTRATOS DE PRESTACIÓN DE SERVICIOS CON LA ADMINISTRACIÓN PÚBLICA.</p>
                <label for="consentimiento">SI<input type="radio" name="consentimiento" id="consentimiento_1"></label>
                <label for="consentimiento">NO<input type="radio" name="consentimiento" id="consentimiento_2"></label>
            </div>
            <div>
                <p>PARA TODOS LOS EFECTOS LEGALES, CERTIFICO QUE LOS DATOS POR MI ANOTADOS EN EL PRESENTE FORMATO ÚNICO DE HOJA DE VIDA, SON
                VERACES, (ARTÍCULO 5o. DE LA LEY 190/95).</p>
            </div>
            <div class="campo-firma1">
                <input type="text" name="" id="">
                <label for="">FIRMA DEL SERVIDOR PÚBLICO O CONTRATISTA</label>
            </div>
        </section>
        <div class="indices ind1">
            <button class="indice d1">5</button>
            <button class="indice d2">OBSERVACIONES DEL JEFE DE RECURSOS HUMANOS Y/O CONTRATOS</button>
        </div>
        <section class="seccion2-pagina3">
            <div class="campo-observaciones">
                <textarea name="observaciones" id="campo_observaciones"></textarea>
            </div>
            <div>
                <p>CERTIFICO QUE LA INFORMACIÓN AQUÍ SUMINISTRADA HA SIDO CONSTATADA
                FRENTE A LOS DOCUMENTOS QUE HAN SIDO PRESENTADOS COMO SOPORTE.</p>
            </div>
            <div class="campo-firma2">
                <input type="text" name="" id="">
                <label for="">NOMBRE Y FIRMA DEL JEFE DE PERSONAL O DE CONTRATOS</label>
            </div>
        </section>
        <div class="boton-pagina-siguiente3">
            <button><a href="/pagina2.html">Pagína Anterior</a></button>
            <button type="submit"><a href="/pagina4.html">ENVIAR</a></button>
        </div>
        <div class="numero-pagina">
            <p>Pagína 3</p>
        </div>
    </div>
</body>
</html>