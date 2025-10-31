<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficheros Ejercicio 2</title>
    </head>
    <body>
        <?php
            $nombreArchivo = "nombres.txt";
            $archivo = fopen($nombreArchivo, "w");
            //echo $archivo
            $nombres = array("Luis", "Maria", "Carlos", "Paco", "Lucia");
            for ($i=0; $i < count($nombres); $i++) { 
                fwrite($archivo, $nombres[$i] . PHP_EOL); //End Of Line
            }
            //foreach ($nombres as $n) {
                // fwrite($archivo, $n . PHP_EOL);
            //}
            fclose($archivo);
            echo "fichero creado...";
        ?>
    </body>
</html>