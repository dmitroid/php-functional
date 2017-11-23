<?php

$arr = [1, 2, 5, 9, 4, 2, 22, 1, 6, 7, 1];

// поиск самого большого числа

$result = array_reduce($arr, function ($acc, $item) {
    return ($item > $acc) ? $item : $acc;

}, $arr[0]);

var_dump($result);

// количество вхождений каждого числа в списке

$result = array_reduce($arr, function ($acc, $item) {
    if (!array_key_exists($item, $acc)) {
        $acc[$item] = 1;
    } else {
        $acc[$item]++;
    }
    
    return $acc;
    
}, []);

var_dump($result);