<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fichero Ejercicio 4</title>
    </head>
    <body>
        <?php
            $nombre_archivo = "noticia.txt";
            //Obtener contenido de archivo como cadena
            $contenido = file_get_contents($nombre_archivo);
            echo "El contenido es: " . $contenido;
        ?>
    </body>
</html>