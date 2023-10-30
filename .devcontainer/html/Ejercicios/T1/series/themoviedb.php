<?php

session_start();
// Si no me he logeado redirijo al indice
if (empty($_SESSION)) {
    exit(header("Location: index.php"));
}

require_once("clases/Usuario.php");
require_once("clases/Pelicula.php");
require_once("librerias/libreria.php");


if (time() - $_SESSION["time"] > 30) {
    session_destroy();
    exit(header("Location: index.php"));
}
$_SESSION["time"] = time();
$usuario = unserialize($_SESSION["usuario"]);



$movies = [
    [
        "titulo" => "El padrino",
        "plataforma" => "Netflix",
        "puntuacion" => "69%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/10J7EQ8WvMYku8lcZrLewV2Ko4I.jpg",
        "argumento" => "

En las calles del Este de Los Ángeles, Manny es un traficante de drogas formidable. Impresionado por su extravagante estilo de vida y sus proezas, su joven hijo, Kilo, anhela seguir sus pasos. Kilo se resuelve para aprender a prosperar en el mundo de las drogas, y comienza su nueva vida como comerciante. En un mundo donde un hombre quiere todo, puede terminar con nada.
"
    ],
    [
        "titulo" => "La monja II",
        "plataforma" => "HBO",
        "puntuacion" => "68%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/x0ryPlzZjpOojEAuGrre2lFuBv6.jpg",
        "argumento" => "

    1956, Francia. Un sacerdote es asesinado, un mal se extiende y la hermana Irene se enfrenta de nuevo a la fuerza malévola de Valak, la monja demonio."
    ],
    [
        "titulo" => "La monja",
        "plataforma" => "thepiratebay",
        "puntuacion" => "59%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/q2JFJ8x0IWligHyuLJbBjqNsySf.jpg",
        "argumento" => "
    Cuando una joven monja se suicida en una abadía de clausura en Rumanía, un sacerdote experto en posesiones demoniacas y una novicia a punto de tomar sus votos, son enviados por el Vaticano para investigar. Juntos descubren el profano secreto de la orden. Arriesgando no solo sus propias vidas sino su fe y hasta sus almas, se enfrentan a una fuerza maléfica en forma de monja demoníaca, en una abadía que se convierte en un campo de batalla de horror entre los vivos y los condenados....
    "
    ],
    [
        "titulo" => "El club de la lucha",
        "plataforma" => "Netflix",
        "puntuacion" => "84%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1yWmCAIGSVNuTOGyz9F48W9g1Ux.jpg",
        "argumento" => "Un joven sin ilusiones lucha contra su insomnio, consecuencia quizás de su hastío por su gris y rutinaria vida. En un viaje en avión conoce a Tyler Durden, un carismático vendedor de jabón que sostiene una filosofía muy particular: el perfeccionismo es cosa de gentes débiles; en cambio, la autodestrucción es lo único que hace que realmente la vida merezca la pena. Ambos deciden entonces formar un club secreto de lucha donde descargar sus frustaciones y su ira que tendrá un éxito arrollador."
    ],
    [
        "titulo" => "Blade Runner",
        "plataforma" => "HBO",
        "puntuacion" => "79%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/k7tpmwwSqwJ6l1f1FqDMnM7x5c2.jpg",
        "argumento" => "
        A principios del siglo XXI, la Tyrell Corporation desarrolló un nuevo tipo de robot llamado Nexus, un ser virtualmente idéntico al hombre y conocido como Replicante. Los Replicantes Nexus-6 eran superiores en fuerza y agilidad, y al menos iguales en inteligencia, a los ingenieros de genética que los crearon. En el espacio exterior, los Replicantes fueron usados como trabajadores esclavos en la arriesgada exploración y colonización de otros planetas. Después de la sangrienta rebelión de un equipo de combate de Nexus-6 en una colonia sideral, los Replicantes fueron declarados proscritos en la Tierra bajo pena de muerte. Brigadas de policías especiales, con el nombre de Unidades de Blade Runners, tenían órdenes de tirar a matar al ver a cualquier Replicante invasor. A esto no se le llamó ejecución, se le llamó retiro.            "
    ],
    [
        "titulo" => "Blade Runner 2049",
        "plataforma" => "Cine",
        "puntuacion" => "75%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aBvDBfqCHs0sCXoun7giyHeClb1.jpg",
        "argumento" => "

    1956, Francia. Un sacerdote es asesinado, un mal se extiende y la hermana Irene se enfrenta de nuevo a la fuerza malévola de Valak, la monja demonio."
    ],
    [
        "titulo" => "Drive",
        "plataforma" => "Diseny+",
        "puntuacion" => "76%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/uC6ykM4OcOaxS7mLMdF7eebdk1Z.jpg",
        "argumento" => "
        Durante el día, Driver trabaja en un taller y es conductor especialista de cine, pero, algunas noches de forma esporádica, trabaja como chófer para delincuentes. Shannon, su mentor y jefe, que conoce bien su talento al volante, le busca directores de cine y televisión o criminales que necesiten al mejor conductor para sus fugas, llevándose la correspondiente comisión. Pero el mundo de Driver cambia el día en que conoce a Irene, una guapa vecina que tiene un hijo pequeño y a su marido en la cárcel.
    "
    ],
    [
        "titulo" => "Baby Driver ",
        "plataforma" => "Netflix",
        "puntuacion" => "74%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/o2YToge3eBhxC89m87zkWKVEx2O.jpg",
        "argumento" => "Baby, un joven y talentoso conductor especializado en fugas, depende del ritmo de su banda sonora personal para ser el mejor en lo suyo. Cuando conoce a la chica de sus sueños, Baby ve una oportunidad de abandonar su vida criminal y realizar una huida limpia. Pero después de haber sido forzado a trabajar para un jefe del crimen, deberá dar la cara cuando un malogrado golpe amenaza su vida, su amor y su libertad."
    ],
    [
        "titulo" => "No es país para viejos",
        "plataforma" => "Sky",
        "puntuacion" => "79%",
        "poster" => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/x9sQnOXhvec93L6cfWMGIx7BS4h.jpg",
        "argumento" => "
        El veterano de la Guerra de Vietnam ahora cazador Llewellyn Moss descubre por casualidad una sangrienta escena en algún lugar de la frontera entre Texas y México, mientras estaba cazando algunos animales en el árido paisaje. Se trata de un negocio que se cerró mal entre contrabandistas de drogas y algunos hombres locales de la zona, provocando la muerte de varios de ellos. Además de los cuerpos y paquetes de heroína, Llewellyn descubre en una maleta algo más de dos millones de dólares. Cuando Llewellyn toma la maleta con el dinero, provoca una reacción en cadena de catastrófica violencia y una carrera sangrienta de los que quieren darle caza.
        "
    ],
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



        foreach ($movies as $key) {
            if ($contador == 0) {
                echo '<div class="row justify-content-center">';
            }
            ?>
            <div class="col-sm">
                <div class="card shadow" style="width: 20rem;">
                    <img class="card-img-top" src="<?= $key['poster'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">
                            <?= $key['titulo'] ?>
                        </h2>
                        <h5 class="card-title">
                            <div class="row justify-content-center">
                                <?php
                                echo "<div class='col'>{$key['plataforma']}</div><div class='col'>-</div>";
                                $rating = (((float) $key['puntuacion']) / 2) / 10;
                                $total_stars = 5;
                                echo "<div class='col-auto'>";
                                estrellas($rating);
                                echo "</div>";

                                ?>
                            </div>
                        </h5>

                        <p class="card-text">
                            <?= substr($key['argumento'], 0, 50) . "..." ?>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php
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