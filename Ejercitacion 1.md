# Ejercitación 1 - Responder el siguiente cuestionario

## 1. ¿Qué es HTML, cuándo fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML es un lenguaje de publicación utilizado en el desarrollo web actualmente. Significa *HyperText Markup Language* (en inglés) o *Lenguaje para el Formato de Documentos de Hipertexto*.

El HTML da a los autores las herramientas para:

- Publicar documentos en línea con encabezados, textos, tablas, listas, fotos, etc.
- Obtener información en línea a través de vínculos de hipertexto, haciendo clic con el botón de un ratón.
- Diseñar formularios para realizar transacciones con servicios remotos, buscar información, hacer reservas, pedir productos, etc.
- Incluir hojas de cálculo, videoclips, sonidos y otras aplicaciones directamente en sus documentos.

HTML fue creado en los años 90 por Tim Berners-Lee y sus versiones son:

- HTML 1.0 (1993)  
- HTML+ (1993)  
- HTML 2.0 (1995)  
- HTML 3.0 (1995)  
- HTML 3.2 (1997)  
- HTML 4.0 (1997)  
- HTML 4.01 (1999)  
- HTML 5 (2014)

## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

Los principios básicos son:

- Separar estructura y presentación  
- Considerar la accesibilidad universal a la Web  
- Ayudar a los agentes de usuario con la representación incremental

## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿Y obsoleto?

- Un **elemento o atributo desaprobado** es aquel que ha quedado anticuado por la presencia de estructuras nuevas.  
- Un **elemento o atributo obsoleto** es aquél para el cual no hay garantía de soporte por parte de un agente de usuario.

## 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

El DTD define la sintaxis de las estructuras de formato. Una definición del tipo de documento SGML declara tipos de elementos que representan estructuras o un comportamiento deseado.

Cada declaración de tipo de elemento describe generalmente tres partes: una etiqueta inicial, un contenido y una etiqueta final.

El DTD de HTML indica para cada tipo de elemento si la etiqueta inicial y la etiqueta final son necesarias.

Los posibles DTDs contemplados en la especificación de HTML 4.01 son:

- DTD Transicional  
- DTD con Marcos  
- DTD Estricto

## 5. ¿Qué son los metadatos y cómo se especifican en HTML?

Los **metadatos** son información sobre un documento más que contenido del propio documento.

La especificación de metadatos implica dos pasos:

1. **Declaración de una propiedad y de un valor para esta propiedad**.  
   Esto puede hacerse de dos maneras:  
   - Desde dentro de un documento, por medio del elemento `META`.  
   - Desde fuera de un documento, vinculando los metadatos por medio del elemento `LINK`.

2. **Referencia a un perfil** en el que se definen la propiedad y sus valores legales.  
   Para designar un perfil, se usa el atributo `profile` del elemento `HEAD`.
