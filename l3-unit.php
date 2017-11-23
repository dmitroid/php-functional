<?php
/*
 * Реализуйте функцию evenSquareSum, которая принимает на вход массив и возвращает
 * сумму квадратов четных чисел.
 */
require 'vendor/autoload.php';
use function Functional\map;

$arr = [];

function evenSquareSum(array $arr) {
    return array_sum(map(array_filter($arr, function ($item) {return $item % 2 == 0;}), function ($item) {return $item ** 2;}));
}

var_dump(evenSquareSum($arr));