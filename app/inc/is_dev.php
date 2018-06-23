<?php
if (!function_exists('is_dev')) {
    function is_dev(){
        if(@end(explode('.',$_SERVER['SERVER_NAME']))==='local'){
            return true;
        }else{
            return false;
        }
    }
}
