# Ejercitación 2

HTML está compuesto por un conjunto de elementos que son la base de su estructura.

Los elementos están compuestos por dos tags (el de apertura y el de cierre) y el contenido en el medio (con excepción de los elementos vacíos).  
Cada tag puede tener atributos (proporcionan ciertas características como altura, ancho, color, etc.) y eventos (asocian un script que se ejecuta cuando el evento ocurre).

Analizar los siguientes segmentos de código indicando en qué sección del documento HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos (nombre y valor), aclarando si es obligatorio.


### 2.a)

Este segmento representa un comentario que se puede ubicar en cualquier sección del documento HTML.  
No produce ningún efecto. `<!--` es la etiqueta de apertura del comentario, luego viene el texto que se quiere comentar y para finalizar se coloca `-->` como etiqueta de cierre.

```html
<!-- Código controlado el día 12/08/2009 -->
```

### 2.b)

Este segmento contiene la etiqueta `div`, que sirve para dividir el contenido del documento HTML, se coloca dentro del `<body>`, no produce ningún efecto a menos que se le aplique algún estilo, se le puede agregar una clase (`class`) o identificador (`id`) para poder asignarle estilo mediante CSS o utilizarlo dentro de un script de JS, aunque no es obligatorio.

```html
<div id="bloque1">Contenido del bloque1</div>
```

### 2.c)  

Este segmento contiene la etiqueta `img` que sirve para mostrar una imagen en el documento HTML, se coloca dentro del `<body>`, muestra la imagen linkeada en el documento, obligatoriamente hay que especificar una ruta donde este ubicada la imagen mediante el atributo `src`, luego es opcional poner los atributos `alt` (muestra el texto que pongamos si la URL de la foto no existe), `id` (identificador para usar con css o js), `name` (nombre de la imagen), `width` (ancho de la imagen), `height` (alto de la imagen) y `longdesc` (descripción de la imagen)

```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />
```

### 2.d) 

Este segmento contiene las etiquetas `meta` que sirve para especificar metadatos del documento HTML, se coloca en el `<head>`, no produce efecto, los atributos utilizados son, `name` para indicar el nombre, `lang` para especificar el idioma, `content` para el contenido del mismo y `http-equiv` que sirve para obtener información de los encabezados del mensaje de respuesta HTTP.

```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```

### 2.e)

Este segmento contiene la etiqueta `a` que sirve para crear un hipervínculo a cualquier URL proporcionada, esta etiqueta puede crear este hipervínculo en un texto o en cualquier forma, se coloca en el `<body>`, produce el efecto de crear un hipervínculo y al clickearlo redirigirte a la pagina dictada x la URL proporcionada, el atributo `href`  es obligatorio ya que ahi es donde se coloca la URL, `type` sirve para especificar el tipo de archivo, `hreflang` para indicar el idioma, `charset` especifica el set de caracteres y `rel` especifica la relacion.

```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML</a>
```

### 2.f)

Este segmento contiene la etiqueta `table`, que representa una tabla en el documento HTML, genera una tabla con 3 columnas (A, B, C) y 2 filas (1°, 2°), tiene un atributo `width` indica el ancho de la tabla.

```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
  <caption align="top">Título</caption>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">A</th>
    <th scope="col">B</th>
    <th scope="col">C</th>
  </tr>
  <tr>
    <th scope="row">1º</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">2º</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
```
