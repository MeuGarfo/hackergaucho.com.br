<?php
require 'inc/segment.php';
require 'inc/slug.php';
$categoria=segment(1);
if(!segment(2) && $categoria=='home'){
    require '../app/home.php';
}elseif(!segment(2) && $categoria=='blog'){
    header('Location: /');    
}elseif(segment(2)){
    $post=segment(2);
    $uriRAW='/'.$categoria.'/'.$post;
    $uriSlug=slug($uriRAW);
    if($uriRAW != $uriSlug){
        die(header('Location: '.$uriSlug));
    }
    $categoria=slug(segment(1),false);
    $post=slug(segment(2),false);
    if($post){
        $filename='../txt/'.$categoria.'/'.$post;
    }else{
        $filename='../txt/'.$categoria;
    }
    if(file_exists($filename)){
        require '../app/post.php';
    }else{
        require '../app/404.php';
    }
}
