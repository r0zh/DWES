<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>

<body>
    <form id="" action="./scripts/procesaformulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="text" id="contrasena" name="contrasena">
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono">
        <br>
        <label for="afaiciones">Aficiones:</label>
        <select name="name" multiple>
            <option value="Baloncesto">Baloncesto</option>
            <option value="Futbol">Futbol</option>
        </select>
        <button value="enviar" type="submit">Enviar</button>
    </form>
</body>

</html>