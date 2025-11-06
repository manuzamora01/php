<?php
            $nombre = $_POST['nombre'];
            $archivo = 'correos.txt';
            $file = fopen($archivo, 'r');
            $encontrado = false; //Si no está en false lo ha encontrado
            while (!feof($file)) {
                $linea = trim(fgets($file));
                if (!empty($linea)) {
                    //Buscar el patrón "nombre:correo"
                    $partes = explode(':', $linea);
                    if (strcmp($nombre, $partes[0]) == 0) {
                        echo "Nombre: " . $partes[0] . "<br>";
                        echo "Correo: " . $partes[1] . "<br>";
                        $encontrado = true;
                    }
                }
            }
            fclose($file);
            if (!$encontrado) {
                echo "No se encontró ningún correo al nombre $nombre";
            }
?>