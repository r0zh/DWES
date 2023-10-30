<!--
    ¿Cómo modificarías el array anterior para que pueda almacenar información
    sobre 5 personas diferentes?
-->
<?php
$usuarios = [["Nombre" => "Juan", "Apellidos" => "Perez", "Edad" => "23", "Direccion" => "Calle 1", "Telefono" => "1234567"], ["Nombre" => "Juan", "Apellidos" => "Perez", "Edad" => "23", "Direccion" => "Calle 1", "Telefono" => "1234567"], ["Nombre" => "Juan", "Apellidos" => "Pere", "Edad" => "23", "Direccion" => "Calle 1", "Telefono" => "1234567"]];

echo "<h1>Con for</h1>";

for ($i = 0; $i < count($usuarios); $i++) {
    $keys = array_keys($usuarios[$i]);
    for ($j = 0; $j < count($usuarios[$i]); $j++) {
        echo "<b>" . $keys[$j] . "</b>: " . $usuarios[$i][$keys[$j]] . "<br>";
    }
    echo "<br>";
}

echo "<h1>Con foreach</h1>";

foreach ($usuarios as $usuario) {
    foreach ($usuario as $key => $value) {
        echo "<b>" . $key . "</b>: " . $value . "<br>";
    }
    echo "<br>";
}
?>