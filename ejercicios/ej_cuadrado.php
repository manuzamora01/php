<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cuadrado</title>
    </head>
    <body>
        <?php
            $alto = rand(5, 10);
            $ancho = rand(5, 10);

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