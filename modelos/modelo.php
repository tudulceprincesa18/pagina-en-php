<?php

class EnlacesPaginas{
    public function enlacesPaginasControlador ($enlace){

        if($enlace == "inicio" ||
           $enlace == "nosotros" ||
           $enlace == "servicios" )

           $modulo = "modulos/".$enlace.".php";

           return $modulo;
    }
}


?>




