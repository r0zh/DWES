<?php
session_start();
require_once("./Usuario.php");

function redireccion(string $url): never
{
    exit(header("Location: $url"));
}

if (!empty($_POST)) {
    $usuario = new Usuario($_POST["email"], $_POST["contrasena"]);
    $_SESSION["usuario"] = serialize($_POST["email"]);
    $_SESSION["time"] = time();
    redireccion("themoviedb.php");
}

if (!empty($_SESSION)) {
    redireccion("themoviedb.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Index</title>
</head>

<body style="margin: 20px;">
    <form id="" action="./index.php" method="post">

        <div class="row">
            <div class="col-xs-2">
                <label for="email">Email:</label>
            </div>
            <div class="col">
                <input type="text" id="email" name="email">
            </div>
        </div>


        <div class="row">
            <div class="col-xs-2">
                <label for="contrasena">Contraseña:</label>
            </div>
            <div class="col">
                <input type="text" id="contrasena" name="contrasena">
            </div>
        </div>

        <div class="row mt-2 mb-2">
            <div class="col">
                <button class="btn btn-primary" value="enviar" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>

</html>