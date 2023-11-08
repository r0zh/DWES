<?php
require_once "Controller.php";

class SerieController extends Controller
{

    public function main()
    {
        $todasSeries = Serie::getAllSeries();
    }

    public function info()
    {

    }

    public function listado()
    {
        echo "listado";
    }
}

?>

