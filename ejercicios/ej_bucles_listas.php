<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicios Bucles Listas</title>
    </head>
    <body>
        <?php
        print "<h2>Ejercicio 1: Suma y media</h2>";

        $numeros = [5, 8, 12, 3, 9, 7, 15, 4, 11, 6];
        $suma = 0;

        print "Lista de números: ";
        for ($i=0; $i < count($numeros); $i++) { 
            print $numeros[$i] . " ";
            $suma = $suma + $numeros[$i];
        }

        $media = $suma / count($numeros);

        print "<br>Suma total: $suma";
        print "<br>La media es: $media";
        ?>
    </body>
</html>