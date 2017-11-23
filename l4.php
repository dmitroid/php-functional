<?php

/*
 * функция zip, склеевание масивов
 */

$a = array(1, 2, 3, 4);
$b = array('one', 'two', 'three');

$result = array_map(null, $a, $b);

var_dump($result);