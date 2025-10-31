<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestor de Lista de Tareas</title>
    </head>
    <body>
        <?php
            $tareas = ["Estudiar PHP", "Hacer la compra", "Llamar al médico", "Pasear al perro", "Limpiar la casa"];
            print "$tareas[0]<br>";
            print "$tareas[1]<br>";
            print "$tareas[2]<br>";
            print "$tareas[3]<br>";
            print "$tareas[4]<br>";
            $totalTareas = count($tareas);
            print "Hay $totalTareas tareas<br>";
            print "$tareas[0] y $tareas[4]<br>";
            print "$tareas[2]";
        ?>
    </body>
</html>