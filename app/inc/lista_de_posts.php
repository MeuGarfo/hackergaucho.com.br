<?php
if(is_array($posts)){
    require 'corrigir.php';
    $content='<h1 class="center">'.mb_ucfirst(corrigir($categoria)).'</h1>';
    $content.='<ul>';
    require 'mb_ucfirst.php';
    require 'corrigir.php';
    ksort($posts);
    foreach ($posts as $data => $post) {
        $content.='<li>';
        if($categoria=='blog'){
            $content.=date('d.M.Y',$data).' ~ ';
        }
        $post=explode('.',$post);
        end($post);
        unset($post[key($post)]);
        $post=implode(".",$post);
        $postCorrigido=corrigir($post);
        $post=slug($post);
        $content.='<a href="/'.$categoria.'/'.$post.'">'.mb_ucfirst($postCorrigido).'</a>';
        $content.='</li>';
    }
    $content.='</ul>';
}else{
    $content='Nenhum post encontrado';
}
require 'layout.php';
?>
