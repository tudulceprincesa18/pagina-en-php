<?php

class Controlador{

public function plantilla (){
    include "vista/template.php";
}

public function enlaceControlador(){
          
       $enlacesPaginasControlador = $_GET["action"];

      $respuesta = EnlacesPaginas::enlaceControlador($enlacesPaginasControlador);
      include $respuesta;

}

}

?>