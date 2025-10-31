<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcula la Edad</title>
    </head>
    <body>
        <?php
            $annioNacimiento = 2005;
            $annioActual = 2025;
            $edad = $annioActual - $annioNacimiento;
            echo "<p>Tu edad actual es $edad</p>"; 
        ?>
    </body>
</html>