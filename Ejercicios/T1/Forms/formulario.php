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
        <fieldset>
            <legend>Aficciones:</legend>
            <div>
                <input type="checkbox" id="futbol" name="futbol"/>
                <label for="futbol">Futbol</label>
            </div>
            <div>
                <input type="checkbox" id="teatro" name="teatro" />
                <label for="teatro">Teatro</label>
            </div>
            <div>
                <input type="checkbox" id="leer" name="leer" />
                <label for="leer">Leer</label>
            </div>
            <div>
                <input type="checkbox" id="dibujar" name="dibujar" />
                <label for="dibujar">Dibujar</label>
            </div>
            <div>
                <input type="checkbox" id="yudo" name="yudo" />
                <label for="yudo">Yudo</label>
            </div>
        </fieldset>
        <button value="enviar" type="submit">Enviar</button>
    </form>
</body>

</html>