<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcula precio de la compra</title>
    </head>
    <body>
        <?php
            $precio = 10;
            $cantidad = 5;
            $precioParcial = $precio * $cantidad;
            $precioTotal = $precioParcial - ($precioParcial * 0.1);
            print "<p>El precio total es $precioTotal</p>";
        ?>
    </body>
</html>