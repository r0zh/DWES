<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>

<body>
    <?php
    if (!empty($_POST["numero"])) {
        $numero = $_POST["numero"];
        if ($numero < 0) {
            echo "Debes introducir un número positivo >= que cero";
        } else
            for ($i = 1; $i <= $numero; $i++) {
                for ($j = $numero - $i; $j > 0; $j--) {
                    echo "&nbsp";
                }

                for ($j = 1; $j < $i; $j++) {
                    echo $j;
                }

                echo $i;

                for ($j = $i - 1; $j > 0; $j--) {
                    echo $j;
                }
                echo "<br>";
            }
    } else {
        ?>

        <form id="" action="./ejerciciopiramideImproved.php" method="post">
            <label for="nombre">Introduce el numero:</label>
            <input type="number" id="numero" name="numero">
            <br>
            <button value="enviar" type="submit">Enviar</button>
        </form>

        <?php
    }
    ?>
</body>

</html>