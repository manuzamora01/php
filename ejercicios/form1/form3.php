<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form3</title>
    </head>
    <body>
        <?php
            //comentarios
            print "<p>Su apellidos son " . $_REQUEST['apellidos'] . "</p>";
            print "<p>Su nombre es " . $_REQUEST['nombre'] . "</p>";
            print "<p>Su menu es " . $_REQUEST['menu'] . "</p>";
            print "<p>Su opcion es " . $_REQUEST['radioej'] . "</p>";
        ?>
    </body>
</html>