<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While</title>
    </head>
    <body>
        <?php
            $i = 0; //Inicializamos la variable en 0
            while ($i <= 10) {
                $i++; //Aumentamos $i en uno
                echo "i ahora equivale a ".$i."</br>"; //Mostramos texto
            }
            echo "Fin del bucle while. El bucle while termino en ".$i."";
        ?>
    </body>
</html>