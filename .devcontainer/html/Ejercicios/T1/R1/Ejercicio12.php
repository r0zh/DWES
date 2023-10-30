<!--
    Dado el siguiente array:

    $info = [[ 6, 7, 1985 ], [ "cast" => [[ "Mickey", "Brand"], [ "chunk", "Mouth", "Data" ], [ "Andy", "stef" ],
    "Fratelli" => [ "Mama", "Francis", "Jack" ] ] ], "us", [4 => 27, 2020, "topic" => "Reunited Apart" ] ] ;

    Sin utilizar el intérprete de PHP:

-->
<?php
$info = [
    [6, 7, 1985],
    [
        "cast" => [
            ["Mickey", "Brand"],
            ["chunk", "Mouth", "Data"],
            ["Andy", "stef"],
            "Fratelli" => ["Mama", "Francis", "Jack"]
        ]
    ],
    "us",
    [4 => 27, 2020, "topic" => "Reunited Apart"]
];

/* 
a. ¿Cómo podríamos acceder a la cadena Jack?
$info[1]["cast"]["Fratelli"][2]

b. Indica cuáles de los siguientes accesos al array son correctos y qué valor
obtendremos en cada caso; si un acceso es incorrecto, explica por qué.
$info[0][2] = 1985
$info[3] = "array"
$info[4][0] = error
$info[1][“cast”][0][6] = error
$info[4][5] = error

c ¿Qué función de PHP utilizarías para mostrar información detallada sobre
el array anterior?
print_r($info)

*/

?>