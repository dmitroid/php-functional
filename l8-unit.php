<?php
/*
 * Реализуйте функцию separateEvenAndOddNumbers, которая принимает на вход массив чисел и возвращает массив,
 *  в котором первый элемент - это массив четных чисел,
 * а второй элемент - это массив нечетных чисел, полученных из исходного массива.
 */

require 'vendor/autoload.php';
use function Functional\partition;

$arr = [1, 2, 3, 4 , 5];

function separateEvenAndOddNumbers(array $arr) {
    list($even, $noteven) = partition($arr, function ($num) {
        return ($num % 2 == 0);
    });
    return [$even, $noteven];
}

var_dump(separateEvenAndOddNumbers($arr));