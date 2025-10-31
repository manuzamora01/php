<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AND y OR</title>
    </head>
    <body>
        <?php
            $diaMes = rand(1, 31);
            echo $diaMes."<br>";

            if ($diaMes < 7) {
                echo "Estamos a primeros de mes";
            }
            if ($diaMes >= 7 && $diaMes <= 23) {
                echo "Es mediados de mes";
            }
            if ($diaMes > 23) {
                echo "Es final de mes";
            }
        ?>
    </body>
</html>