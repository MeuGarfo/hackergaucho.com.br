<?php
$posts=false;
foreach (scandir('../txt/blog') as $key => $post) {
    if($post<>'.' && $post<>'..'){
        $filename='../txt/blog/'.$post;
        $content=file_get_contents($filename);
        $content=explode(PHP_EOL,$content);
        $posts[$content[0]]=$post;
    }
}
$title='Hacker Gaucho';
if($posts){
    $content='<h1>Blog</h1>';
    $content.='<ul>';
    require 'inc/mb_ucfirst.php';
    require 'inc/corrigir.php';
    ksort($posts);
    foreach ($posts as $data => $post) {
        $content.='<li>';
        $content.=date('d.M.Y',$data).'~ ';
        $postCorrigido=corrigir($post);
        $content.='<a href="/blog/'.$post.'">'.mb_ucfirst($postCorrigido).'</a>';
        $content.='</li>';
    }
    $content.='</ul>';
}else{
    $content='Nenhum post encontrado';
}
require 'layout.php';
?>
