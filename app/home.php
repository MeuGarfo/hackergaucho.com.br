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
    ksort($posts);
    foreach ($posts as $data => $post) {
        $content.='<li>';
        $content.=date('d.M.Y',$data).'~ ';
        $content.='<a href="/blog/'.$post.'">'.mb_ucfirst($post).'</a>';
        $content.='</li>';
    }
    $content.='</ul>';
}else{
    $content='Nenhum post encontrado';
}
require 'layout.php';
?>
