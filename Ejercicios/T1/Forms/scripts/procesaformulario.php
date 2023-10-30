<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($_POST as $key => $value) {
        echo "$key : ";
        echo $value == "on" ? "✅" : $value;
        echo "<br>";
    }
    ?>
</body>

</html>