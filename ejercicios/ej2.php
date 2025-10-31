<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php //comentario
            //Variables: todas las variables con $
            //tipo int
            $edad = 88; //asignación
            print "<p>La edad de Pepe es $edad</p>";
            // + - * / %
            $radio = 12;
            //tipo float
            $perimetro = 2 * 3.14 * $radio;
            print "el valor es $perimetro";

            //Tipo Cadena/Varchar
            $cadena1 = "Hola";
            $cadena2 = "ASIR";
            $cadena3 = $cadena1 . " " . $cadena2; //el punto concatena
            print "<p>$cadena3</p>\n";
        ?>
    </body>
</html>