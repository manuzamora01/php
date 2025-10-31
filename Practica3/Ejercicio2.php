<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $dado11 = rand(1, 6);
            $dado12 = rand(1, 6);
            $dado13 = rand(1, 6);
            $dado14 = rand(1, 6);
            $dado15 = rand(1, 6);
            print "<h2>Jugador 1</h2>";
            print "<p>";
            print "<img src='img/$dado11.jpg' height=140>";
            print "<img src='img/$dado12.jpg' height=140>";
            print "<img src='img/$dado13.jpg' height=140>";
            print "<img src='img/$dado14.jpg' height=140>";
            print "<img src='img/$dado15.jpg' height=140>";
            print "</p>";
            $result1 = $dado11 + $dado12 + $dado13 + $dado14 + $dado15;

            $dado21 = rand(1, 6);
            $dado22 = rand(1, 6);
            $dado23 = rand(1, 6);
            $dado24 = rand(1, 6);
            $dado25 = rand(1, 6);
            print "<h2>Jugador 2</h2>";
            print "<p>";
            print "<img src='img/$dado21.jpg' height=140>";
            print "<img src='img/$dado22.jpg' height=140>";
            print "<img src='img/$dado23.jpg' height=140>";
            print "<img src='img/$dado24.jpg' height=140>";
            print "<img src='img/$dado25.jpg' height=140>";
            print "</p>";
            $result2 = $dado21 + $dado22 + $dado23 + $dado24 + $dado25;

            print "<h2>Resultado</h2>";
            if ($result1 > $result2) {
                print "En conjunto, el ganador es el jugador 1";
            } else if ($result1 < $result2) {
                print "En conjunto, el ganador es el jugador 2";
            } else {
                print "Empate";
            }
        ?>
    </body>
</html>