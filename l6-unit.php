<?php
/*
 * Реализуйте функцию sortByBinary, которая сортирует переданную коллекцию и
 * возвращает новую коллекцию. Сортировка происходит следующим образом:

Сортируем по количеству единиц в бинарном представлении (порядок следования не важен).
Если количество единиц одинаково, то сортируем на основе десятичного представления.
Пример:

[1, 2, 4, 3] == sortByBinary([3, 4, 2, 1]);
 */

$arr = [3, 4, 2, 1];


    

function sortByBinary($arr)
{
   usort($arr,     function ($a, $b)
   {
       $a_bin = decbin($a);
       $b_bin = decbin($b);
       $a_bin_1 = substr_count($a_bin, '1');
       $b_bin_1 = substr_count($b_bin, '1');
    
       if ($a_bin_1 == $b_bin_1) {
           return ($a < $b) ? -1 : 1;
       } else {
           return ($a_bin_1 < $b_bin_1) ? -1 : 1;
       }
   });
    
    return $arr;
}

sortByBinary($arr);

var_dump(sortByBinary($arr));


