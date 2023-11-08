<?php

// Tenemos que indicarle al controlador frontal (index.php)
// que queremos hacer (f) y con que controlador/modelo (m)
// Indicamos esto a traves de la URL.
//index.php?m=series&f=main

$que = $_GET["f"]; // funcion a realizar con el controlador|modelo
$quien = $_GET["m"]; // serie, usuario, genero, pelicula, etc...

// "Construimos" el nombre del controlador con el que vamos
// a trabajar.
$nombreControlador = "{$quien}Controller";

// Ruta hasta el controlador
$ruta = "controladores/{$nombreControlador}.php";

if (!file_exists($ruta)) 
    die("No existe el controlador $nombreControlador");

// Importamos el controlador
require_once $ruta;
// Instanciamos el controlador
$controlador = new $controlador;
if (method_exists($controlador, "$que"))
    $contador->$que();
else
    die("No existe la funcion $que en el controlador $quien");    


?>

