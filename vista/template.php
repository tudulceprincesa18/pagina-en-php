<!DOCTYPE html>
<html lang="en">
<head>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mi pagina </title>
</head>
<body>
    
<header>
<h1> MI PAGINA </h1>
</header>

<?php

include "modulos/navegacion.php";

?>

<section>

     <?php
     
    $mvc = new Controlador();
    $mvc -> enlaceControlador(); 
      
     ?>

</section>

</body>
</html>
