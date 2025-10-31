<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1 Listas</title>
    </head>
    <body>
        <?php
            $lista_compras = ["pan", "leche", "huevos", "fruta", "queso"];
            echo "<p>Primer producto: $lista_compras[0]</p>";
            echo "<p>Último producto: $lista_compras[4]</p>";
            echo "<p>Tercer producto: $lista_compras[2]</p>";

            $cantidad = count($lista_compras);
            echo "<p>Total de productos en la lista: $cantidad</p>";
        ?>
    </body>
</html>