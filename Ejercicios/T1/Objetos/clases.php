<?php
// class Coche
// {
//     public readonly bool $escoche;
//     public string $matricula;
//     public string $modelo;
//     public string $color;
//     public $marca;
//     public $puertas;

//     public function __construct(string $matricula, string $modelo, string $color, string $marca, int $puertas)
//     {
//         $this->escoche = true;
//         $this->matricula = $matricula;
//         $this->modelo = $modelo;
//         $this->color = $color;
//         $this->marca = $marca;
//         $this->puertas = $puertas;
//     }
// }

class Persona
{
    const EDAD_MAXIMA = 120;
    private string $nombre;
    private string $apellidos;
    private int $direccion;

    public function __construct(string $nombre, string $apellidos, int $direccion)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
    }

    public function __get(mixed $propiedad): mixed
    {
        if (property_exists($this, $propiedad))
            return $this->$propiedad;

        return new Exception("La propiedad $propiedad no existe");
    }

    public function __set(mixed $propiedad, string $value)
    {
        if (property_exists($this, $propiedad))
            $this->$propiedad = $value;
        return new Exception("La propiedad $propiedad no existe");
    }

    public function __toString()
    {
        return "Nombre: $this->nombre, Apellidos: $this->apellidos, Direccion: $this->direccion, Edad maxima: " . self::EDAD_MAXIMA;
    }

}

class Coche
{
    private Persona $propietario;

    public function __construct(private string $matricula, private string $modelo, private string $color, private string $marca, private int $puertas)
    {
    }

    public function __destruct()
    {
        echo "El coche se ha destruido";
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function __get(mixed $propiedad): mixed
    {
        if (property_exists($this, $propiedad))
            return $this->$propiedad;

        return new Exception("La propiedad $propiedad no existe");
    }

    public function __set(mixed $propiedad, string $value)
    {
        if (property_exists($this, $propiedad))
            $this->$propiedad = $value;
        return new Exception("La propiedad $propiedad no existe");
    }

    public function __isset($name)
    {
        return isset($this->$name);
    }

    public function __invoke()
    {
        echo "Estas invocando al objeto como una funcion";
    }

    public function __clone()
    {

    }
}

$micoche = new Coche("1234ABC", "Leon", "Rojo", "Seat", 5);
echo $micoche->aaa . "<br>";
$micoche->propietario = new Persona("Pepe", "Perez", 1234);
var_dump($micoche);

class Alumno extends Persona
{
    public function __construct(string $nombre, string $apellidos, int $direccion, private string $curso)
    {
        parent::__construct($nombre, $apellidos, $direccion);
    }

    public function __toString()
    {
        return parent::__toString() . " Curso: $this->curso";
    }

}

$alumno = new Alumno("Pepe", "Perez", 1234, "DAW");
echo $alumno;

?>