<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form4</title>
    </head>
    <body>
        <?php
            if ($_REQUEST["nombre"] == "") {
                print "<p>No ha escrito ningún nombre</p>";
            } else {
                print "<p>Su contraseña es" . $_REQUEST['pass'] . "</p>";
                echo "longitud del nombre " . strlen($_REQUEST["nombre"]);
            }
        ?>
    </body>
</html>