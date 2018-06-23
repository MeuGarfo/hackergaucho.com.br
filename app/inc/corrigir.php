<?php
//criado por @aicoutos em 23jun2018

if (!function_exists('corrigir')) {
    function corrigir($str){
        $lista=[
            'cloudflare'=>'Cloudflare',
            'hacker gaucho'=>'Hacker Gaucho',
            'google cloud'=>'Google Cloud',
            'html'=>'HTML',
            'php'=>'PHP'
        ];
        foreach ($lista as $errado => $correto) {
            $str=str_ireplace($errado, $correto, $str);
        }
        return $str;
    }
}
