<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
            $num1 = trim(strip_tags($_REQUEST["num1"]));
            $operacion = $_REQUEST["operacion"];
            $num2 = trim(strip_tags($_REQUEST["num2"]));
            
            if ($operacion == "+") {
                $total = $num1 + $num2;
                print "<p>$num1 + $num2 = $total</p>";
            } elseif ($operacion == "-") {
                $total = $num1 - $num2;
                print "<p>$num1 - $num2 = $total</p>";
            } elseif ($operacion == "*") {
                $total = $num1 * $num2;
                print "<p>$num1 * $num2 = $total</p>";
            } else {
                $total = $num1 / $num2;
                print "<p>$num1 / $num2 = $total</p>";
            }
        ?>
    </body>
</html>