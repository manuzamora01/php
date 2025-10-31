<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tirar un dado</title>
    </head>
    <body>
        <?php
            print "<h1>Tirada de dado</h1>";
            $dado = rand(1, 6);
            print "<p>Ha sacado un $dado</p>";

            if ($dado == 6) {
                print "<p>¡Ha conseguido la máxima puntuación!</p>";
            } else {
                print "<p>Tienes menos de 6</p>";
            }
            print "<p>¡Hasta la próxima!</p>";
        ?>        
    </body>
</html>