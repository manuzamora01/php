<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados ASIR</title>
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
                print "<p>ASIR gana</p>";
                print "<p>Dado 1 = $dado1</p> <p>Dado 2 = $dado2</p> <p>Dado 3 = $dado3</p>";
            } elseif ($dado1 == 1 && $dado2 == 2 && $dado3 == 3 || $dado1 == 4 && $dado2 == 5 && $dado3 == 6) {
                print "<p>Escalera perfecta</p>";
                print "<p>Dado 1 = $dado1</p> <p>Dado 2 = $dado2</p> <p>Dado 3 = $dado3</p>";
            } elseif ($dado1 == 3 && $dado2 == 2 && $dado3 == 1 || $dado1 == 6 && $dado2 == 5 && $dado3 == 4) {
                print "<p>Escalera perfecta</p>";
                print "<p>Dado 1 = $dado1</p> <p>Dado 2 = $dado2</p> <p>Dado 3 = $dado3</p>";
            } elseif ($dado2 == $dado3) {
                print "<p>Has sacado una pareja de $dado2</p>";
                print "<p>Dado 1 = $dado1</p> <p>Dado 2 = $dado2</p> <p>Dado 3 = $dado3</p>";
            } else {
                print "<p>El valor más alto es " . max($dado1, $dado2, $dado3) . "</p>";
                print "<p>Dado 1 = $dado1</p> <p>Dado 2 = $dado2</p> <p>Dado 3 = $dado3</p>";
            }
        ?>
    </body>
</html>