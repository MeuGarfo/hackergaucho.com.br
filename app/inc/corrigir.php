<?php
function corrigir($str){
    $lista=[
        'hacker gaucho'=>'Hacker Gaucho',
        'google cloud'=>'Google Cloud'
    ];
    foreach ($lista as $errado => $correto) {
        $str=str_ireplace($errado, $correto, $str);
    }
    return $str;
}
?>
