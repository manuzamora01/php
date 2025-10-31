<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
            $lista =  [15, 27, 8, 42, 19, 33, 6, 51, 24, 37];
            $numero = 19;
            $posicion = 0;
            $verificar = false;
            print "Lista: ";
            for ($i=0; $i < count($lista); $i++) { 
                print "$lista[$i] ";
                if ($lista[$i] == $numero) {
                    $verificar = true;
                    $posicion = $i;
                }
            }
            if ($verificar == true) {
                print "<br>El número $numero está en la lista en la posición $posicion de la lista";
            } else {
                print "<br>El número $numero no está en la lista";
            }
        ?>
    </body>
</html>