<?php
    //Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    //Control de errores
    //Comprobar que el archivo existe o crearlo si no existe
    $archivo = 'correos.txt';
    if (!file_exists($archivo)) {
        fopen($archivo, 'w'); //Crea el archivo vacío
    }
    //Abrir eñ archivo en modo escritura y agregar los datos
    $file = fopen($archivo, 'a');
    fwrite($file, "$nombre:$email" . PHP_EOL);
    fclose($file);