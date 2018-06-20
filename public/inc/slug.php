<?php
//criado por @aicoutos em 06abr2018

function slug($text,$set=true){
    if($set){
        return str_replace(' ', '_', $text);
    }else{
        return str_replace('_', ' ', $text);
    }
}
