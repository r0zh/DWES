<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Piramide</title>
</head>

<body style="margin: 20px;">
    <form id="" action="./scripts/procesaformulario.php" method="post">
        <!-- Nombre -->
        <div class="row">
            <div class="col-xs-2">
                <label for="nombre">Nombre:</label>
            </div>
            <div class="col">
                <input type="text" id="nombre" name="nombre">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-2">
                <label for="apellido">Apellidos</label>
            </div>
            <div class="col">
                <input type="text" id="apellidos" name="apellidos">
            </div>
        </div>

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

        <div class="row">
            <div class="col-xs-2">
                <label for="contrasena">Repite contraseña:</label>
            </div>
            <div class="col">
                <input type="text" id="repite-contrasena" name="repite-contrasena">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-2">
                <label for="telefono">Teléfono:</label>
            </div>
            <div class="col">
                <input type="text" id="telefono" name="telefono">
            </div>
        </div>


        <!-- <fieldset>
            <legend>Aficciones:</legend>
            <div>
                <input type="checkbox" id="futbol" name="futbol" />
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
        </fieldset> -->
        <div class="row mt-2 mb-2">
            <div class="col">
                <button class="btn btn-primary" value="enviar" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>

</html>