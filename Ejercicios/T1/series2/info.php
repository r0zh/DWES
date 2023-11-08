<?php
    require_once "modelos/Serie.php" ;
    require_once "librerias/Conexion.php" ;
    require_once "vendor/autoload.php" ;

    $db = Conexion::getConnection() ;
    $db->query("SELECT * FROM serie WHERE idSerie = 4 ; ") ;
    $serie = $db->getRow("Serie") ;

    // Configuramos la libreria Twig indicando la carpeta donde se encuentran las vistas
    $loader = new \Twig\Loader\FilesystemLoader('vistas');
    $twig = new \Twig\Environment($loader, [
        'cache' => 'compilation_cache',
        'auto_reload' => true,
    ]);

    echo $twig->render('info.php.twig', ["serie" => $serie]) ;
?> 