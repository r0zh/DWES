<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="font-family: 'Courier New', Courier, monospace;">
    <?php
    $numero = $_POST["numero"];
    $numero_copy = $numero;
    $digitos = countDigits($numero);

    if ($numero < 0) {
        echo "Debes introducir un número positivo >= que cero";
    } else {
        for ($i = 1; $i <= $numero; $i++) {
            for ($j = ($numero - $i) * $digitos; $j > 0; $j--) {
                echo "&nbsp";
            }

            for ($j = 1; $j < $i; $j++) {
                for ($k = countDigits($j); $k < $digitos; $k++) {
                    echo "0";
                }
                echo $j;
            }

            for ($j = countDigits($i); $j < $digitos; $j++) {
                echo "0";
            }
            echo $i;

            for ($j = $i - 1; $j > 0; $j--) {
                for ($k = countDigits($j); $k < $digitos; $k++) {
                    echo "0";
                }
                echo $j;
            }
            echo "<br>";
        }
    }
    function countDigits($number)
    {
        $numDigitos = 0;
        while ($number >= 1) {
            $number = $number / 10;
            $numDigitos++;
        }
        return $numDigitos;
    }
    ?>
</body>

</html>