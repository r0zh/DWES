<?php
class Serie
{
    private string $plataforma;
    private string $titulo;
    private string $puntuacion;
    private string $poster;
    private string $argumento;

    public function __construct(string $titulo, string $plataforma, string $puntuacion, string $poster, string $argumento)
    {
        $this->plataforma = $plataforma;
        $this->titulo = $titulo;
        $this->puntuacion = $puntuacion;
        $this->poster = $poster;
        $this->argumento = $argumento;
    }

    public function getPlataforma(): string
    {
        return $this->plataforma;
    }

    public function setPlataforma(string $plataforma): void
    {
        $this->plataforma = $plataforma;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getPuntuacion(): string
    {
        return $this->puntuacion;
    }

    public function setPuntuacion(string $puntuacion): void
    {
        $this->puntuacion = $puntuacion;
    }

    public function getPoster(): string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): void
    {
        $this->poster = $poster;
    }

    public function getArgumento(): string
    {
        return $this->argumento;
    }

    public function setArgumento(string $argumento): void
    {
        $this->argumento = $argumento;
    }

    public function __toString(): string
    {
        $rating = (((float) $this->puntuacion) / 2) / 10;
        $estrellas = estrellas($rating);

        return "<div class=\"col-sm\">
        <div class=\"card shadow\" style=\"width: 20rem;\">
            <img class=\"card-img-top\" src=\"{$this->poster}\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h2 class=\"card-title\">
                    {$this->titulo}
                </h2>
                <h5 class=\"card-title\">
                    <div class=\"row justify-content-center\">
                        <div class='col'>{$this->plataforma}</div><div class='col'>-</div>
                        
                        <div class='col-auto'>
                        $estrellas
                        </div>
                    </div>
                </h5>

                <p class=\"card-text\">
                    <?= substr($this->argumento, 0, 50) . \"...\" ?>
                </p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
            </div>
        </div>
    </div>";
    }
}


function estrellas($rating): string
{
    $total_stars = 5;
    $estrellas = "";
    while ($rating > 1) {
        $estrellas .= '<img src="./assets/star.png" width="18px">';
        $rating--;
        $total_stars--;
    }
    if ($rating > 0.5) {
        $estrellas .= '<img src="./assets/halfstar.png" width="18px">';
        $total_stars--;
    }
    for ($i = 0; $i < $total_stars; $i++) {
        $estrellas .= '<img src="./assets/emptystar.png" width="18px">';
    }

    return $estrellas;
}

?>