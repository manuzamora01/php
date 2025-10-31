<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form5</title>
    </head>
    <body>
        <?php
            //trim eliminada espacios delante y detrás de un campo
            //strip_tags quita etiquetas HTML
            if (trim(strip_tags($_REQUEST["nombre"])) == '') {
                print "<p>No ha escrito ningún nombre</p>";
            } else {
                print "<p>Su nombre es " . trim(strip_tags($_REQUEST["nombre"])) . "</p>";
            }
        ?>
    </body>
</html>