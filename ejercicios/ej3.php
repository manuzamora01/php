<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
            $x = 2;
            $y = 4;
            $suma = $x + $y;
            $producto = $x * $y;
            $potencia = pow($x, $y);
            print "<p>Suma: $x + $y = $suma</p>";
            print "<p>Multiplicación: $x x $y = $producto</p>";
            print "<p>Potencia: $x ^ $y = $potencia</p>";
        ?>
    </body>
</html>