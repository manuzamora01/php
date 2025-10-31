<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mult2</title>
    </head>
    <body>
        <?php
            $num = trim(strip_tags($_REQUEST["num"]));

            if (is_numeric($num)) {
                for ($i=0; $i <= 10; $i++) { 
                    $operacion = $i * $num;
                    print "<p>$num x $i = $operacion";
                } 
            } else {
                print "No es un número";
            }          
        ?>
    </body>
</html>