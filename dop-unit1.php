<?php
/*
 * Реализуйте функцию arrangeBiggestNumber, которая составляет самое большое число из
 *  переданного массива чисел и возвращает его строковое представление.
 * Например из чисел [3, 24, 4] мы можем составить такие:
 * 3244, 3424, 2434, 2443, 4324, 4243 и самое больше из них это 4324.
 * Пример:
 * 998764543431 == arrangeBiggestNumber([1, 34, 3, 98, 9, 76, 45, 4]);
 */


function arrangeBiggestNumber($numbers)
{
    if (empty($numbers)) {
        return;
    }
    
    usort($numbers, function ($prev, $next) {
        $number1 = (int) ($next . $prev);
        $number2 = (int) ($prev . $next);
        return bccomp($number1, $number2);
    });
    
    return implode('', $numbers);
}

echo arrangeBiggestNumber([3, 24, 4]);