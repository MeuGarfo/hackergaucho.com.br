<?php
require 'inc/mb_ucfirst.php';
$categoriaUC=mb_ucfirst($categoria);
foreach (scandir('../txt/'.$categoria) as $key => $post) {
    if($post<>'.' && $post<>'..'){
        $filename='../txt/'.$categoria.'/'.$post;
        $content=file_get_contents($filename);
        $content=explode(PHP_EOL,$content);
        $posts[$content[0]]=$post;
    }
}
$title='Hacker Gaucho';
require 'inc/lista_de_posts.php';
?>
