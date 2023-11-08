<?php
	
	session_start() ;

	// Si no me he logueado redirijo al índice
	if (empty($_SESSION)) 
		header("Location: index.php") ;

	// comprobamos si la sesión de tiempo ha expirado
	if (time()-$_SESSION["inicio"] >= 300) 
		header("Location: logout.php") ;

	// refresco el momento de acceso a la página	
	$_SESSION["inicio"] = time() ;

	// importamos las librerías
	require_once("librerias/libreria.php") ;

	// importamos las clases
	require_once("modelos/Serie.php") ;
	require_once("modelos/Usuario.php") ;

	// recuperamos información del usuario
	$usuario = unserialize($_SESSION["usuario"]) ;

	
	$series = Serie::getAllSeries() ;


	// $series = [

	// 	new Serie("Ahsoka", "Disney +", "Ambientada después de la caída del Imperio, la serie sigue al antiguo caballero Jedi mientras investiga una amenaza que se cierne sobre la galaxia.", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/zcuJsJEhaORzxaz6aRxm66NWgt7.jpg", 8),
	// 	new Serie("La maldición de Hill House", "Netflix", "Un grupo de hermanos que, cuando eran niños, crecieron en lo que luego se convertiría en la casa embrujada más famosa del país. Ahora adultos, y forzados a volver a estar juntos frente a la tragedia, la familia finalmente debe enfrentarse a los fantasmas de su pasado.", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/flBIpQHga5217QgLE4BanIAzMix.jpg", 8.1),
	// 	new Serie("Aquí no hay quien viva", "Netflix", "Roberto y Lucía están felices por mudarse al nuevo piso, pero desconocen la comunidad de vecinos que les espera. En la calle Desengaño, convivirán con sus vecinos un tanto peculiares.", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/yj3sVi1fJFKJPSPPCJC94yvEDQy.jpg", 8.4),
	// 	new Serie("Cómo conocí a vuestra madre", "Amazon", "How I Met Your Mother. Exitosa serie de la CBS que, en su primera temporada, obtuvo excelentes índices de audiencia además de ganar dos premios Emmy: uno a la dirección artística y otro a la fotografía.", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/b34jPzmB0wZy7EjUZoleXOl2RRI.jpg", 8.2),
	// 	new Serie("Friends", "HBO", "Las aventuras de seis jóvenes neoyorquinos unidos por una divertida amistad. Entre el amor, el trabajo y la familia, comparten sus alegrías y preocupaciones en el Central Perk, su café favorito.", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rkKCSlr8OH5tbKEdgwtzvEiemrl.jpg", 8.4),
	// 	new Serie("Frasier", "HBO", "El doctor Frasier Crane es un estirado psiquiatra que, tras su divorcio, se traslada de Boston a Seattle para llevar un programa-consultorio de radio.", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/gYAb6GCVEFsU9hzMCG5rxaxoIv3.jpg", 7.7),
	// 	new Serie("Velma", "HBO", "Los orígenes de Velma Dinkley, la inteligente y gran olvidada integrante de Misterios S. A. de Scooby-Doo. Una serie divertida y original que descubre el complejo y peculiar pasado de una de las detectives más queridas.", "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/zrTKIXx0GrE6yABJL829HBAs1Jy.jpg", 3.5),
	// 	new Serie("Parks and Recreation", "Amazon", "La serie sigue las andanzas en formato de documental, de Leslie Knope, que trabaja en el departamento de parques y tiempo libre en Pawnee, Indiana.", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8KGNPcfhbOj4DjDC9UzszoiMgzS.jpg", 8),				
	// ] ;


	//echo "<pre>".print_r($series, true)."</pre>" ;
	//die() ;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>
<body>

	<div class="container">

		<?php require_once "menu.php" ; 
		require_once "vendor/autoload.php";
		$loader = new \Twig\Loader\FilesystemLoader('vistas');
		$twig = new \Twig\Environment($loader, [
			'cache' => 'compilation_cache',
			'auto_reload' => true,
		]);
		echo $twig->render('main.php.twig', ['series' => $series]);
		?>

		<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php foreach($series as $serie): ?>
			<div class="col">
				<div class="card shadow" style="width:18rem;">
					<img src="<?= $serie->getCartel() ?>" class="card-img-top" />
					<div class="card-body">
						<h4 class="card-title"><?= $serie->getTitulo() ; ?></h4>
						<?php
							$puntuacion = floor($serie->getPuntuacion()) ;
							echo estrellas($puntuacion) ;
							//estrellas(5 - $puntuacion, false) ;
						?>
						<h6><?= $serie->getPlataforma() ; ?></h6>
						<p class="card-text"><?= substr($serie->getArgumento(),0,50)."..." ?></p>
						<a href="info.php?id=4" class="btn btn-dark btn-sm">Mas info.</a>
					</div>
				</div>
			</div>
			
		<?php endforeach ; ?>
		</div>
	</div>

</body>
</html>