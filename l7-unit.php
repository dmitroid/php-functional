<?php
/*
 * Реализуйте функцию mapWithPower, которая принимает на вход массив и степень,
 *  и возвращает новый массив, в котором каждое значение возведено в переданную степень.

Пример:

[1, 1, 9, 100, 0] == mapWithPower([-1, 1, 3, 10, 0], 2)
 */
require 'vendor/autoload.php';
use function Functional\partial_any;
use function Functional\map;
use const Functional\…;

$arr = [-1, 1, 3, 10, 0];

//$res = partial_any('pow',…, 2);

//echo $res(2);

function mapWithPower (array $arr, $pw) {
    $foo = partial_any('pow',…, $pw);
    return map($arr, $foo);
}

print_r(mapWithPower([-1, 1, 3, 10, 0], 2));