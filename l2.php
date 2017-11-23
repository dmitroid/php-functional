<?php
require 'vendor/autoload.php';
use function Functional\map;

$arr = range(1, 10);

$map = ['key' => 'value', 'another-key' => 'another-value'];

$result1 = array_map(function ($item) {
    return $item ** 2;
} , $arr);

var_dump($result1);

$result2 = array_map(function ($key, $value) {
    return $key . " <---> " . $value;
}, array_keys($map), $map);

var_dump($result2);

$iterator = new \DirectoryIterator('vendor');

$result3 = map($iterator, function ($info) {
    return $info->getFilename();
});

var_dump($result3);