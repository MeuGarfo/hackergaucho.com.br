<?php
//criado por @aicoutos em 23jun2018

if (!function_exists('corrigir')) {
    function corrigir($str){
        $lista=[
            'cloudflare'=>'Cloudflare',
            'Commit semântico'=>'Commit Semântico',
            'hacker gaucho'=>'Hacker Gaucho',
            'google cloud'=>'Google Cloud',
            'html'=>'HTML',
            '.html'=>'.html',
            '.HTML'=>'.HTML',
            'lamp'=>'LAMP',
            'linux'=>'Linux',
            'php'=>'PHP',
            'wget'=>'Wget',
            'unix'=>'Unix'
        ];
        foreach ($lista as $errado => $correto) {
            $str=str_ireplace($errado, $correto, $str);
        }
        return $str;
    }
}
