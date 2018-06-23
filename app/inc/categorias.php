<?php
$categoriasRAW=scandir('.././txt/');
require 'corrigir.php';
require 'mb_ucfirst.php';
$categorias=false;
foreach ($categoriasRAW as $key => $categoria) {
    if($categoria<>'.' && $categoria<>'..'){
        $categorias[$categoria]=corrigir($categoria);
    }
}
return $categorias;
?>
