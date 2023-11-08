<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	
</head>
<body>

	<div class="container">

		<form action="procesarCuestionario.php" method="GET">

			<!-- Nombre -->
			<div class="row">
				<div class="col-xs-2">
					<label for="nombre">Nombre: </label>
				</div>

				<div class="col">
					<input class="form-control" id="nombre" type="text" name="nombre" />
				</div>
			</div>

			<!-- Apellido -->
			<div class="row">
				<div class="col-xs-2">
					<label for="apellido">Apellido: </label>
				</div>

				<div class="col">
					<input class="form-control" id="apellido" type="text" name="apellido" />
				</div>
			</div>

			<!-- Email -->
			<div class="row">
				<div class="col-xs-2">
					<label for="Email">Email: </label>
				</div>

				<div class="col">
					<input class="form-control" id="email" type="email" name="email" />
				</div>
			</div>

			<!-- Contraseña  -->
			<div class="row">
				<div class="col-xs-2">
					<label for="pass">Contraseña: </label>
				</div>

				<div class="col">
					<input class="form-control" id="pass" type="password" name="pass" />
				</div>
			</div>

			<!-- Confirmación contraseña  -->
			<div class="row">
				<div class="col-xs-2">
					<label for="passc">Repite tu contraseña: </label>
				</div>

				<div class="col">
					<input class="form-control" id="passc" type="password" name="passc" />
				</div>
			</div>
		
			<div class="row mt-2">
				<div class="col">
					<button class="btn btn-dark w-25">Enviar Datos</button>
				</div>
			</div>
			
		</form>
	</div>


</body>
</html>