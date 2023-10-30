<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo "Hola mundo!"; ?>
    <?php
    for ($i = 1; $i < 7; $i++) {
        echo "<p>";
        echo "<h" . $i . ">" . $i . "</h" . $i . ">";
        echo
            "</p>";
    }
    ?>
    <?= "Hola mundo, otra vez!" ?>
    <?php
    // Ejemplo comentario
    # Ejemplo comentario
    /* 
    Ejemplo comentario 
    */
    ?>
    <?php print("AAAAA"); ?>
    <?php
    $a = "Hola";
    if (str_contains($a, 'a b c')) {
        echo "Checking the existence of the empty string will always return true";
    }
    ?>
    <?php
    for ($i = 0; $i < 3; $i++) {
        $size = rand(1, 6);
        printf("<h%d>Hello World</h%d>", $size, $size);
        echo "<br>";
    } ?>
    <?php
    // echo "<pre>";
    
    // print_r($GLOBALS);
    
    // echo "</pre>";
    $arraymixta = [
        0 => "aa",
        1 => "a",
        '' => "cosa"
    ];

    echo $arraymixta[-1];


    // Specifying directory
    $mydir = '/var/www/html/Ejercicios/T1';

    // Scanning files in a given directory in ascending order
    $myfiles = scandir($mydir);

    // Displaying the files in the directory
    print_r($myfiles);
    ?>

</body>

</html>