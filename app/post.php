<?php
$content=file_get_contents($filename);
if($categoria=='blog'){
    $content=explode(PHP_EOL,$content);
    $data=$content[0];
    unset($content[0]);
    $content=implode(PHP_EOL,$content);
}
require 'inc/mb_ucfirst.php';
$categoriaFirst=mb_ucfirst($categoria);
$post=mb_ucfirst($post);
require 'inc/corrigir.php';
$post=corrigir($post);
$title=$post;
date_default_timezone_set('America/Sao_Paulo');
if($post){
    $h1Title="<h1 class='center'>{$post}</h1>";
    if(isset($data)){
        $string='<div class="center"><small>';
        $string.="<a href='/{$categoria}'>{$categoriaFirst}</a> &raquo; ";
        $string.=date('d.M.Y h:i:s A',$data);
        $string.='</small></div>';
    }else{
        $string='<div class="center"><small>';
        $string.="<a href='/{$categoria}'>{$categoriaFirst}</a>";
        $string.='</small></div>';
    }
    $content=$h1Title.$string.'<hr>'.$content;
    $content=mb_ucfirst($content);
    $content=corrigir($content);
    $content.='<hr>'.$string;
    require 'inc/layout.php';
}else{
    require '404.php';
}
