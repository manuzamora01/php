<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anazalizar una lista de números</title>
    </head>
    <body>
        <?php
            $numeros = [5, 8, 12, 3, 9, 7, 15, 4, 11, 6];
            $max = 0;
            $min = $numeros[0];

            print "Lista de números: ";
            for ($i=0; $i < count($numeros); $i++) { 
                print $numeros[$i] . " ";
                if ($numeros[$i] > $max) {
                    $max = $numeros[$i];
                } elseif ($numeros[$i] < $min) {
                    $min = $numeros[$i];
                }
            }
            print "<br> Número mayor: $max";
            print "<br> Número menor: $min";
        ?>
    </body>
</html>