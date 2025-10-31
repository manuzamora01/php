<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            $ancho = $_REQUEST['ancho'];
            $alto = $_REQUEST['alto'];
            print "<h2>Cuadrado</h2>";
            for ($i=0; $i < $alto; $i++) { 
                for ($j=0; $j < $ancho; $j++) {
                    print "*";
                }
                print "<br>";
            }
            print "</p>";
        ?>
    </body>
</html>