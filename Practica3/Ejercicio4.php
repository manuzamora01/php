<?php
    $nombre = trim(strip_tags($_GET['nombre']));
    $trabajo = trim(strip_tags($_GET['trabajo']));
    $telefono = trim(strip_tags($_GET['telefono']));
    $direccion = trim(strip_tags($_GET['direccion']));
    $otras = trim(strip_tags($_GET['otras']));
    $buscarNombre = $_GET['buscarNombre'];
    $archivo = 'agenda.txt';
    
    if (!file_exists($archivo)) {
        fopen ($archivo, 'w');
    }

    if ($_REQUEST['accion'] == "guardar") {
        $file = fopen($archivo, 'a');
        fwrite($file, "$nombre, $trabajo, $telefono, $direccion, $otras" . PHP_EOL);
    } else if ($_REQUEST['accion'] == "buscar") {
        $file = fopen($archivo, 'r');
        while (!feof($file)) {
        $linea = trim(fgets($file));
        if (!empty($linea)) {
        $partes = explode(',', $linea);
        if (strcmp($buscarNombre, $partes[0]) == 0) {
            echo "$partes[0], $partes[1], $partes[2], $partes[3], $partes[4] <br>";
            $encontrado = true;
            }
        }
    }
    fclose($file);
    if (!$encontrado) {
        echo "No se encontró ningún correo al nombre $buscarNombre";
    }
    }
    
?>