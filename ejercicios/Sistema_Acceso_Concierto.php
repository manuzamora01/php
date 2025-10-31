<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Acceso a un concierto</title>
    </head>
    <body>
        <?php
            $edad = rand(15, 70);
            $ticket = rand(0, 1);
            $hora = rand(16, 24);
            $acom = rand(0, 3);

            print "<p>La edad es $edad años</p>";
            print "<p>El número de tickets es $ticket</p>";
            print "<p>La hora de llegada es $hora</p>";
            print "<p>Hay $acom acompañantes</p>";

            if ($ticket == 1 && $edad >= 18 && $hora <= 21 && $acom <= 1) {
                print "<p>ACCESO VIP</p>";
            } elseif ($ticket == 1 && ($edad == 16 || $edad == 17) && $hora <=22) {
                print "<p>ACCESO CON RESTRICCIONES</p>";
            } elseif ($ticket == 0 || $edad < 16 || $hora > 23) {
                print "<p>ACCESO DENEGADO</p>";
            } elseif ($ticket == 1 && $edad >= 18 && $hora <=23) {
                print "<p>ACCESO PERMITIDO</p>";
            }
        ?>
    </body>
</html>