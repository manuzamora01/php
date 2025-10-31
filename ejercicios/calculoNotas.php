<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculo de notas</title>
    </head>
    <body>
        <?php
            $notas = [7.5, 8.0, 6.5, 9.0, 7.0];
            $notaAlta = max($notas);
            print "La nota más alta es $notaAlta<br>";
            $notaBaja = min($notas);
            print "La nota más baja es $notaBaja<br>";
            $media = array_sum($notas)/count($notas);
            print "La media es $media";
        ?>
    </body>
</html>