<?php
session_start();
if (empty($_SESSION)) {
    exit(header("Location: index.php"));
}

if (time() - $_SESSION["time"] > 500) {
    session_destroy();
    exit(header("Location: index.php"));
}
$_SESSION["time"] = time();


require_once("clases/Pelicula.php");
require_once("librerias/libreria.php");


$movies = [
    new Serie(
        "Netflix",
        "El padrino",
        "69%",
        "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/10J7EQ8WvMYku8lcZrLewV2Ko4I.jpg",
        "En las calles del Este de Los Ángeles, Manny es un traficante de drogas formidable. Impresionado por su extravagante estilo de vida y sus proezas, su joven hijo, Kilo, anhela seguir sus pasos. Kilo se resuelve para aprender a prosperar en el mundo de las drogas, y comienza su nueva vida como comerciante. En un mundo donde un hombre quiere todo, puede terminar con nada."
    ),
    new Serie(
        "HBO",
        "La monja II",
        "68%",
        "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/x0ryPlzZjpOojEAuGrre2lFuBv6.jpg",
        "1956, Francia. Un sacerdote es asesinado, un mal se extiende y la hermana Irene se enfrenta de nuevo a la fuerza malévola de Valak, la monja demonio."
    ),
    // Continue for each movie...
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>The Movie DB marca blanca</title>
</head>

<body>
    <style>
        .card {
            margin-bottom: 15px;
        }
    </style>
    <form action="post"></form>
    <h1 class="h1">The Movie DB (marca blanca)</h1>
    <br>
    <br>
    <br>
    <div class="container">
        <?php

        $contador = 0;


        foreach ($movies as $movie) {
            if ($contador == 0) {
                echo '<div class="row justify-content-center">';
            }

            echo $movie;

            if ($contador == 3) {
                echo '';
                $contador = 0;
            }
            $contador++;
            if ($contador == 3) {
                echo '</div>';
                $contador = 0;
            }
        }
        ?>
    </div>
</body>

</html>