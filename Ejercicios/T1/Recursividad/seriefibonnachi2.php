<?php

$num = 0;
$num2 = 1;
$num3 = 0;

/**
 * Funcion que imprime la serie de fibonacci
 */
function serieFibonacci(int $num): void{
    global $num;
    global $num2;
    global $num3;
    $num3 = $num + $num2;
    $num = $num2;
    $num2 = $num3;
    echo "{$num3} </br>";
    if ($num > 0) {
        serieFibonacci($num - 1);
    }
}

?>