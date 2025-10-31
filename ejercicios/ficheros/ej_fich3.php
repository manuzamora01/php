<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficheros Ejercicio 3</title>
    </head>
    <body>
        <?php
            /*Leer archivo de texto con PHP*/
            $nombre_archivo = "noticia.txt";
            $fd = fopen($nombre_archivo, "r"); #Modo r, read
            echo "El contenido del fichero es: <br>";

            while (!feof($fd)) { //feof: end of file EOF
                $lectura = fgets($fd); //Lee del fichero una linea
                echo $lectura."<br>";
            }
            //No olvides cerrar el fichero
            fclose($fd);
        ?>
    </body>
</html>