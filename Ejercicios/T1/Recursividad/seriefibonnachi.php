<?php
echo "<h1>Fibonacci series</h1>";
global $num1;
global $num2;

/**
 * Initializes the variables of the series
 */
function initSerie(): void
{
    global $num1;
    global $num2;
    $num1 = 0;
    $num2 = 1;
    echo "{$num1}</br>";
    echo "{$num2}</br>";
}

echo "<h3>Con un for</h3>";

initSerie();
for ($i = 0; $i < 10; $i++) {
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    echo "{$num2} </br>";
}

echo "</br></br>";


echo "<h3>Con funcion</h3>";
initSerie();

/**
 * Prints the next number in the serie
 * @param int $num
 */
function serieFibonacci(int $num): void
{
    global $num1;
    global $num2;
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    echo "{$num2} </br>";
    if ($num > 0) {
        serieFibonacci($num - 1);
    }
}

serieFibonacci(9);

function fibonacci(int $n): int
{
    if ($n == 0)
        return 1; 
    else if ($n == 1)
        return 1; 
    else
        return fibonacci($n - 1) + fibonacci($n - 2);
}
echo "<br><br>";
echo fibonacci(4);
?>