<?php
require 'inc/mb_ucfirst.php';
$content=mb_ucfirst(file_get_contents($filename));
if($categoria=='blog'){
    $content=explode(PHP_EOL,$content);
    $data=$content[0];
    unset($content[0]);
    $content=implode(PHP_EOL,$content);
}
$categoria=mb_strtoupper($categoria);
$post=mb_ucfirst($post);
$title=$post;
date_default_timezone_set('America/Sao_Paulo');
if($post){
    $string="<strong>{$categoria}</strong>";
    $string.="<h1>{$post}</h1>";
    if(isset($data)){
        $string.='<p class="right"><small>'.date('d.M.Y h:i:s A',$data).'</small></p>';
    }
    $content=$string.$content;
    require 'layout.php';
}else{

}
