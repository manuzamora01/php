<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Clima Aleatorio</title>
    </head>
    <body>
        <?php
            $temp = rand(-25, 50);
            $humedad = rand(0, 100);
            $lluvia = rand(0, 50);
            print "<p>Temperatura = $temp º</p>";
            print "<p>Humedad = $humedad%</p>";
            print "<p>Lluvia = $lluvia mm</p>";
            
            $alerta = false;
            if ($temp < 0) {
                print "<p>¡ALERTA POR HELADA!</p>";
                $alerta = true;
            } 
            if ($temp > 35) {
                print "<p>¡ALERTA POR CALOR EXTREMO!</p>";
                $alerta = true;
            } 
            if ($humedad > 80 && $lluvia > 20) {
                print "<p>¡ALERTA POR TORMENTA!</p>";
                $alerta = true;
            } 
            if ($lluvia > 30) {
                print "<p>¡RIESGO DE INUNDACIÓN!</p>";
                $alerta = true;
            } 

            if (!$alerta) {
                print "<p>Clima normal para la temporada</p>";
            }
        ?>
    </body>
</html>