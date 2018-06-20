<?php
//criado por @aicoutos em 18jun2018

function segment($integer=false){
    $string=$_SERVER["REQUEST_URI"];
    if($string=='/'){
        return ['1'=>'home'];
    }else{
        $array=explode('/',$string);
        $array=array_filter($array);
        foreach ($array as $key => $value) {
            $array[$key]=urldecode($value);
        }
        if($integer){
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
}
