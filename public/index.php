<?php
//ERROS
require '../app/inc/is_dev.php';
if(is_dev()){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}else{
    error_reporting(0);
}
//INCLUDES
require 'inc/segment.php';
require 'inc/slug.php';
//ROTEAMENTO
$categoria=segment(1);
if(!segment(2) && $categoria=='home'){
    //HOME
    require '../app/home.php';
}elseif(!segment(2) && $categoria=='blog'){
    //BLOG
    header('Location: /');
}elseif(segment(2)){
    //POST
    $post=segment(2);
    $uriRAW='/'.$categoria.'/'.$post;
    $uriSlug=slug($uriRAW);
    if($uriRAW != $uriSlug){
        die(header('Location: '.$uriSlug));
    }
    $categoria=slug(segment(1),false);
    $post=slug(segment(2),false);
    $filename='../txt/'.$categoria.'/'.$post.'.html';
    if(file_exists($filename)){
        require '../app/post.php';
    }else{
        require '../app/404.php';
    }
}elseif($categoria){
    //CATEGORIA
    switch($categoria){
        case 'sobre':
        require '../app/sobre.php';
        break;
        default:
        if(file_exists('../txt/'.$categoria)){
            require '../app/categoria.php';
        }else{
            require '../app/404.php';
        }
        break;
    }
}else{
    require '../app/404.php';
}
