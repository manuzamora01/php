<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            $lista = [5, -3, 0, 8, -7, 0, 12, -2, 4, -9];
            $positivos = 0;
            $negativos = 0;
            $cero = 0;
            
            print "Lista: ";
            for ($i=0; $i < count($lista); $i++) { 
                print "$lista[$i] ";
                if ($lista[$i] > 0) {
                    $positivos++;
                } elseif ($lista[$i] < 0) {
                    $negativos++;
                } elseif ($lista[$i] == 0) {
                    $cero++;
                }
            }

            print "<br>Hay $positivos números positivos <br>";
            print "Hay $negativos números negativos <br>";
            print "Hay $cero ceros";
        ?>
    </body>
</html>