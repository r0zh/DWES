<?php
// Ejemplo commit
class Persona
{
    private $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function
        getNombre(
    ): string {
        return $this->nombre;
    }
}
class Profesor extends Persona
{
    public
        function __construct(
        $nombre
    ) {
        parent::__construct($nombre);
    }
}

trait Tutor
{
    protected $unidad;
    public function info()
    {
        echo "Es tutor de $this->unidad<br />";
    }
}
?>