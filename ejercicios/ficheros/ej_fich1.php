<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficheros</title>
    </head>
    <body>
        <?php
            $nombreArchivo = "clase2810.txt";
            $mensaje = "Texto en el fichero";

            //abrir un fichero
            $archivo = fopen($nombreArchivo, "a"); //w - write a-append
            echo $archivo;
            fwrite($archivo, $mensaje);

            fclose($archivo); //cierra el archivo
        ?>
    </body>
</html>