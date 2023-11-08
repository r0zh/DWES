<?php

    require_once "librerias/Conexion.php" ;

    class Serie {

        public int $idSerie;
        public string $titulo;
        public string $plataforma;
        public string $argumento;
        public string $cartel;
        public float $puntuacion ;
    
        /**
         * @param string $tit
         * @param string $pla
         * @param string $arg
         * @param string $car
         * @param float  $pun
         * @return
         */
        public function __construct() { }
        
        /**
         * @param string $tit
         * @return
         */
        public function setTitulo(string $tit) {
            $this->titulo = $tit ;
        }

        /**
         * @param string $plat
         * @return
         */
        public function setPlataforma(string $plat) {
            $this->plataforma = $plat ;
        }

        /**
         * @param string $arg
         * @return
         */
        public function setArgumento(string $arg) {
            $this->argumento = $arg ;
        }

        /**
         * @param string $car
         * @return
         */
        public function setCartel(string $car) {
            $this->cartel = $car ;
        }

        /**
         * @param float $pun
         * @return
         */
        public function setPuntuacion(float $pun) {
            $this->puntuacion = $pun ;
        }

        /**
         * @return string
         */
        public function getTitulo():string {
            return $this->titulo ;
        }

        /**
         * @return string
         */
        public function getPlataforma():string {
            return $this->plataforma ;
        }

        /**
         * @return string
         */
        public function getArgumento():string {
            return $this->argumento ;
        }

        /**
         * @return string
         */
        public function getCartel():string {
            return $this->cartel ;
        }

        /**
         * @return int
         */
        public function getPuntuacion():int {
            return floor($this->puntuacion * 0.5) ;
        }

        /**
         * @return string
         */
        public function __toString():string {

            $estrellas = estrellas($this->getPuntuacion()) ;
            $argumento = substr($this->argumento, 0,50)."..." ;

            return "<div class=\"col\">
                        <div class=\"card shadow\" style=\"width:18rem;\">
                            <img src=\"{$this->cartel}\" class=\"card-img-top\" />
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">{$this->titulo}</h4>
                                {$estrellas}
                                <h6>{$this->plataforma}</h6>
                                <p class=\"card-text\">{$argumento}</p>
                                <a href=\"#\" class=\"btn btn-dark btn-sm\">Mas info.</a>
                            </div>
                        </div>
                    </div>" ;
        }

        /**
         * Recupera información sobre una determinada serie
         * @param int $idSerie
         * @return Serie
         */
        public static function getSerie(int $idSerie):Serie 
        {            
            // Podemos encadenar llamadas a métodos tras utilizar
            // métodos que devuelvan la instancia de la clase Conexion.
            return Conexion::getConnection()
                        ->query("SELECT * FROM serie WHERE idSerie={$idSerie} ;")
                        ->getRow("Serie") ;            
        }

        /**
         * Recupera información sobre todas las series
         * @return array
         */
        public static function getAllSeries(): array {
            
            // Recuperamos la instancia de la clase Conexión
            $db = Conexion::getConnection() ; 

            // Realizamos la consulta 
            $db->query("SELECT * FROM serie ; ") ;

            // Recuperamos los datos y los devolvemos en forma de array
            return $db->getAll("Serie") ;
                    
        }



    }