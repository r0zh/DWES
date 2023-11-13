<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    // Specifying directory
    $temas = scandir('/var/www/html/Ejercicios');

    $relaciones = [];
    $ejercicios = [];

    for ($i = 0; $i < count($temas); $i++) {
        array_push($relaciones, scandir('/var/www/html/Ejercicios/' . $temas[$i]));
    }

    foreach ($temas as $tema) {
        if ($tema != '.' && $tema != '..' && $tema != '.gitkeep') {
            echo "<h1>$tema</h1>";
            $relaciones = scandir('/var/www/html/Ejercicios/' . $tema);
            foreach ($relaciones as $relacion) {
                if ($relacion != '.' && $relacion != '..') {
                    echo "<h3>$relacion</h3>";
                    $ejercicios = scandir('/var/www/html/Ejercicios/' . $tema . '/' . $relacion);
                    natsort($ejercicios);
                    foreach ($ejercicios as $ejercicio) {
                        if ($ejercicio != '.' && $ejercicio != '..') {
                            echo "<li><a href='/Ejercicios/$tema/$relacion/$ejercicio'>$ejercicio</a></li>";
                        }
                    }
                }
            }

        }
    }


    // Scanning files in a given directory in ascending order
    // $myfiles = scandir($mydir);
    
    // Displaying the files in the directory
    // print_r($myfiles);
    ?>

</body>

</html>