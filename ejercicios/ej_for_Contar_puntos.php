<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio For Contar Puntos</title>
    </head>
    <body>
        <?php
            $total = 0;
            $numero = 5;
            print "<h2>$numero dados</h2>";
            for ($i=0; $i < $numero; $i++) { 
                $dado = rand(1, 6);
                print "<img src='./img/$dado.jpg' height='140'>";
                $total = $total+$dado;
            }
            print "</p>";
            print "<p>El total de puntos obtenidos es <b>$total</b>.</p>";
        ?>
    </body>
</html>