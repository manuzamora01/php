<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>control_form2</title>
    </head>
    <body>
        <?php
            $correo = trim(strip_tags($_REQUEST['correo']));
            $correo2 = trim(strip_tags($_REQUEST['correo2']));
            $recibir = $_REQUEST['recibir'];

            $correoOK = false;
            $correo2OK = false;
            $recibirOK = false;

            if ($correo == "") {
                print "<p>No ha escrito su dirección de correo.</p>";
            } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                print "<p>No ha escrito una dirección de correo correcta.</p>";
            } else {
                $correoOK = true;
            }

            if ($correo2 != $correo) {
                print "<p>Las direcciones de correo no coinciden.</p>";
            } else {
                $correo2OK = true;
            }
            if ($recibir == "-1") {
                print "<p>No ha indicado si desea recibir correos.</p>";
            } else {
                $recibirOK = true;
            }
            if ($correoOK && $correo2OK && $recibirOK) {
                print "<p>Su dirección de correo es <strong>$correo</strong>.</p>";
            }
        ?>
    </body>
</html>