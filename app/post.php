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
    $string="<h1>{$post}</h1>";
    if(isset($data)){
        $string.='<small>';
        $string.="<a href='/{$categoria}'>{$categoriaUpper}</a> &raquo; ";
        $string.=date('d.M.Y h:i:s A',$data);
        $string.='</small><hr>';
    }
    $content=$string.$content;
    $content=mb_ucfirst($content);
    $content=corrigir($content);
    $content.='<hr><div class="center"><a href="/">Início</a></div>';
    require 'layout.php';
}else{
    require '404.php';
}
