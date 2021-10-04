#fgm-exercise

Ejercicio 2:
- Explicar que hace y encontrar el error en el script, resolver al menos uno:
- Ejercicio 2.1:
-
- <?php
- class Foo {
-
function aMemberFunc() {
-
return json_encode(array("nombre"=>iconv("UTF-8",
"ISO-8859-1", 'César')));
-
-
}
}
-
- $foo = new Foo;
- echo $foo['aMemberFunc']();
- ?>
-
### Define una clase, con un metodo, sin embargo le falta el scope "public" a la función aMemberFunc.
### En el llamado de la función desde el objeto foo, es de forma incorrecta, debe ser: $foo->aMemberFunc() ;
-
Ejercicio 2.2:
-
- <!DOCTYPE html>
- <html>
- <body>
- <script>
- function myFunction() {
    var tt = []
- tt['1']=1;
- tt['100']=2;
- document.getElementById("resultado").innerHTML =
tt['100'];
- }
- myFunction();
- </script>
- Mensaje:
- <div id="resultado"><div>
- </body>
- </html>


### En el ejercicio 2.2, se esta creando un array con 2 elementos, de los cuales el segundo se esta asignando al div con id "resultado", el script marcara error debido a que el div esta colocado después del script, por lo que el DOM carga primero el script y después crea el div