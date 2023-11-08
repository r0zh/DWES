<?php

    class Usuario {

        public int $idUsuario ;
        public string $email ;
        public string $pass ;
        public ?string $nombre ;
        public ?string $apellido ;
        public ?string $foto ;
        
        public function __construct() { }

        /*public function __sleep(): array {
            return ["nombre", "email"] ;
        }*/

        /*public function __wakeup() {
            // LO QUE TENGAS QUE PONER
        }*/
        
    }

?>