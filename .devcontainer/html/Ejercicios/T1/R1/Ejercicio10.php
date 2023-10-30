<!--
    ¿Cómo modificarías el array anterior para que pueda almacenar información
    sobre 5 personas diferentes?
-->
<?php
$usuario = ["nombre" => "Juan", "apellidos" => "Perez", "edad" => "23", "direccion" => "Calle 1", "telefono" => "1234567"];
$usuarios = [["nombre" => "Juan", "apellidos" => "Perez", "edad" => "23", "direccion" => "Calle 1", "telefono" => "1234567"], ["nombre" => "Juan", "apellidos" => "Perez", "edad" => "23", "direccion" => "Calle 1", "telefono" => "1234567"], ["nombre" => "Juan", "apellidos" => "Pere"]];
echo $usuarios[0]["nombre"];
?>