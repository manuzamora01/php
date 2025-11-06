<?php
    $nombre = trim(strip_tags($_POST['nombre']));
    $enseñanza = trim(strip_tags($_REQUEST['enseñanza']));
    $telefono = trim(strip_tags($_POST["telefono"]));
    $matriculado = trim(strip_tags($_REQUEST['matriculado']));
    $mostrar = trim(strip_tags($_REQUEST['mostrar']));
    $archivo = 'datos.txt';

    if ($mostrar == "pantalla") {
        if ($matriculado == "on") {
            echo "El alumno $nombre, con telefono $telefono, está matriculado en $enseñanza";
        } else {
            echo "El alumno $nombre, con telefono $telefono, no está matriculado en $enseñanza";
        }
    } else if ($mostrar == "archivo") {
        if (!file_exists($archivo)) {
        fopen ($archivo, 'w');
        }

        if ($matriculado == "on") {
            $file = fopen($archivo, 'a');
            fwrite($file, "El alumno $nombre, con telefono $telefono, esta matriculado en $enseñanza" . PHP_EOL);
        } else {
            $file = fopen($archivo, 'a');
            fwrite($file, "El alumno $nombre, con telefono $telefono, no esta matriculado en $enseñanza" . PHP_EOL);
            
        }
        print "<a href='$archivo'>Mostrar los datos</a>";
    }
?>
  


 