<?php
/*
 * «Мощность строки» — выдуманное нами понятие, которое показывает ее силу ;-).
 * Вычисляется оно как сумма ASCII кодов букв строки.
 */
require 'vendor/autoload.php';
use function Functional\map;


function powerOfString($str)
{
    // BEGIN (write your solution here)
//    $arr = str_split($str);
//    $arr = array_map(function ($item) {
//        return ord($item);
//    }, $arr);
//    return array_sum($arr);
    
    return array_sum(map(str_split($str),function ($item) {
        return ord($item);
    }));
    
    
    // END
}

echo var_dump(powerOfString(''));