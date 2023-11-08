<?php
    /**
     * Libería de funciones aplicación SERIES
     */

     //const MAX_ESTRELLAS = 5 ;

	define("MAX_ESTRELLAS", 5) ;

     function estrellas($total) {
        //function estrellas($total, $llena=true) {
    
            //$clase = ($llena)?"-fill":"" ;
            $cadena = "" ;

            for($i=1; $i <= $total; $i++)
                $cadena .= "<i class=\"bi bi-star-fill\"></i>" ;
    
                // otras formas de hacerlo
                //echo "<i class=\"bi bi-star{$clase}\"></i>" ;
                /*echo ($llena)?"<i class=\"bi bi-star-fill\"></i>" 
                             :"<i class=\"bi bi-star\"></i>" ;*/
    
            for( ; $i <= MAX_ESTRELLAS; $i++)
                $cadena .= "<i class=\"bi bi-star\"></i>" ;

            return $cadena ;
        }