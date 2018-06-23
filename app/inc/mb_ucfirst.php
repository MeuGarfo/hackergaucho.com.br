<?php
//criado por @aicoutos em 18jun2018

if (!function_exists('mb_ucfirst')) {
    function mb_ucfirst($str) {
        $fc = mb_strtoupper(mb_substr($str, 0, 1));
        return $fc.mb_substr($str, 1);
    }
}
