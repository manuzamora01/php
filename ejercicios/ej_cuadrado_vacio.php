<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Cuadrado Vacio</title>
    </head>
    <body>
        <?php
            $alto = rand(5, 10);
            $ancho = rand(5, 10);

            print "<h2>Cuadrado</h2>";
            print "Alto: ".($alto+1)." - Ancho: ".($ancho+1)."<br>";
            
            for ($i=0; $i <= $alto; $i++) { 
                for ($j=0; $j <= $ancho; $j++) {
                    if ($i == 0 || $i == $alto) {
                        print "*";
                    }
                    elseif ($j == 0 || $j == $ancho) {
                        print "*";  
                    } else {
                        print "&nbsp;&nbsp;";
                    }
                }
                print "<br>";
            }
            print "</p>";
        ?>
    </body>
</html>