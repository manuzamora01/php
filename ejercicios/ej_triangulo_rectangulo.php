<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Triángulo Rectángulo</title>
    </head>
    <body>
        <?php
        print "<h2>Triángulo rectángulo</h2>";
        $tamannio = rand(5, 10);
        print "<p>Altura: ".($tamannio-2)."</p>";
        
        for ($i=1; $i < $tamannio; $i++) { 
            for ($j=1; $j < $i; $j++) { 
                print "*";
            }
            print "<br>";
        }
        ?>
    </body>
</html>