<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funciones Numéricas</title>
    </head>
    <body>
        <?php
            $numeros = [5, 2, 8, 1, 9];
            $maximo = max($numeros);
            echo "$maximo <br>"; //Muestra 9

            $minimo = min($numeros);
            echo "$minimo <br>"; //Muestra 1

            $suma = array_sum($numeros);
            echo "$suma <br>"; //Muestra 25

            $numeros = [3, 2, 1];
            sort($numeros);
            //Ahora [1, 2, 3]

            $numeros = [1, 2, 3];
            rsort($numeros);
            //Ahora [3, 2, 1]
        ?>
    </body>
</html>