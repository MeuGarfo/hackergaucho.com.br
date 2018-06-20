<?php
//criado por @aicoutos em 18jun2018

function segment($integer=false){
    $string=$_SERVER["REQUEST_URI"];
    if($string=='/'){
        $string='/home';
    }
    $array=explode('/',$string);
    $array=array_filter($array);
    foreach ($array as $key => $value) {
        $array[$key]=urldecode($value);
    }    
    if(is_numeric($integer)){
        if(isset($array[$integer])){
            return $array[$integer];
        }else{
            return false;
        }
    }elseif(count($array)>0){
        return $array;
    }else{
        return false;
    }
}
