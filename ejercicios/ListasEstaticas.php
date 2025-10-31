<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listas Estaticas</title>
    </head>
    <body>
        <?php
            $lista = ["casa", "perro", "manzana", "pera", "coche"];
            print "<p>El valor de la posición es $lista[0]</p><br>";
            echo $lista;
            $lista2 = [6, 8, 7, 9, 0];
            print "<p>El valor de la posición es $lista2[2]</p>";
        ?>
    </body>
</html>