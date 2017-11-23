<?php
// аналог функции flatten

function flatten($array)
{
    $func = function ($acc, $item) use ($iter) {
        if (is_array($item)) {
            $acc = $iter($item, $acc);
        } else {
            $acc[] = $item;
        }
        return $acc;
    };
    
    $iter = function ($array, $acc) use (&$iter, &$func) {
        return array_reduce($array, $func, $acc);
    };
    
    return $iter($array, []);
}