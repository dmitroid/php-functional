<?php
require 'vendor/autoload.php';
use function Functional\select;

$arr = range(1, 10);

$result1 = array_filter($arr, function ($item) {
    return $item % 2 != 0;
});

var_dump($result1);

$result2 = array_filter($arr, function ($key) {
    return $key > 5;
}, ARRAY_FILTER_USE_KEY);

var_dump($result2);

$iterator = new \DirectoryIterator('vendor');

$result3 = select($iterator, function ($item) {
    return $item->isDir();
});

var_dump($result3);