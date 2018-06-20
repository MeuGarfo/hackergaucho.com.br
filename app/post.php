<?php
require 'inc/mb_ucfirst.php';
$content=file_get_contents($filename);
if($categoria=='blog'){
    $content=explode(PHP_EOL,$content);
    $data=$content[0];
    unset($content[0]);
    $content=implode(PHP_EOL,$content);
}
$categoriaUpper=mb_strtoupper($categoria);
$post=mb_ucfirst($post);
require 'inc/corrigir.php';
$post=corrigir($post);
$title=$post;
date_default_timezone_set('America/Sao_Paulo');
if($post){
    $string="<strong><a href='/{$categoria}'>{$categoriaUpper}</a></strong>";
    $string.="<h1>{$post}</h1>";
    if(isset($data)){
        $string.='<p><small>'.date('d.M.Y h:i:s A',$data).'</small></p>';
    }
    $content=$string.$content;
    $content=mb_ucfirst($content);
    $content=corrigir($content);
    require 'layout.php';
}else{
    require '404.php';
}
