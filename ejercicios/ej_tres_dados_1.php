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

        if ($dado1 == $dado2 && $dado1 == $dado3) {
            print "<p>Has sacado un trio de $dado1</p>";
        } elseif ($dado1 == $dado2 || $dado1 == $dado3) {
            print "<p>Has sacado una pareja de $dado1</p>";
        } elseif ($dado2 == $dado3) {
            print "<p>Has sacado una pareja de $dado2</p>";
        } else {
            print "<p>El valor más alto es " . max($dado1, $dado2, $dado3) . "</p>";
        }
        ?>
    </body>
</html>