<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficheros Ejercicio 5.1</title>
    </head>
    <body>
        <?php
            $nombre = trim(strip_tags($_REQUEST['nombre']));
            //hacer las comprobaciones
            $fichero = "nombres2.txt";
            $esta = false;
            // Verificar si el archivo existe antes de abrirlo
            if (file_exists($fichero)) {
                $fd = fopen($fichero, "r"); //Modo r, read
                while (!feof($fd)) { //feof: end of file
                    $linea = fgets($fd); //lee línea
                    if ($linea != false) {
                        //Eliminar espacios y saltos de línea antes de comparar
                        if (trim($linea) == trim($nombre)) {
                            $esta = true;
                        }
                    }
                }
                fclose($fd);
            }
            if ($esta == true) {
                echo "Esta en el fichero";
            } else {
                echo "No está";
            }
        ?>
    </body>
</html>