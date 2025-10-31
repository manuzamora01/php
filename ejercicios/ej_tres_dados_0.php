<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio tres dados</title>
    </head>
    <body>
        <?php
            $dado1 = rand(1, 6);
            $dado2 = rand(1, 6);
            $dado3 = rand(1, 6);
            print "<p>";
            print "<img src='img/$dado1.jpg' height=140>";
            print "<img src='img/$dado2.jpg' height=140>";
            print "<img src='img/$dado3.jpg' height=140>";
            print "</p>";
        ?>
    </body>
</html>