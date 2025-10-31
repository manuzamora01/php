<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            print "Lista: ";
            $lista = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
            for ($i=0; $i < count($lista); $i++) { 
                print "$lista[$i] ";
            }
            print "<br>Lista invertida: ";
            for ($j=count($lista); $j >= 0; $j--) {
                print "$lista[$j] ";
            }
        ?>
    </body>
</html>