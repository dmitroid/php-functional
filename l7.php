<?php
require 'vendor/autoload.php';

use function Functional\partial_any;
use function Functional\Select;
use const Functional\…;

$substractor = function ($a, $b) {
    return $a - $b;
};
$res = $substractor(10, 3);

echo $res . "<br>";

$substractor1 = function ($a) {
  return function ($b) use ($a) {
      return $a - $b;
  };
};

$res1 = $substractor1(11);
echo $res1(2);

$elements = [
    'john',
    'joe',
    'joanna',
    'patrick',
];

$selectsd = select($elements, partial_any('substr_count',…, 'jo'));
print_r($selectsd);