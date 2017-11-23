<?php

$firstClubAttempts = [['name' => 'milan', 'scored' => 1], ['name' => 'milan', 'scored' => 0]];
$secondClubAttempts = [['name' => 'porto', 'scored' => 1], ['name' => 'porto', 'scored' => 1]];

function bestAttempt($club1, $club2) {

    
    $res = array_values(array_map(function ($club1, $club2) {
        
        if ($club1['scored'] == $club2['scored']) {
            return null;
        }
        if ($club2['scored'] > $club1['scored']) {
            return $club2['name'];
        } else {
           return $club1['name'];
        }
    }, $club1, $club2));
    
    return array_values(array_diff($res, array(null)));
}

var_dump(bestAttempt($firstClubAttempts, $secondClubAttempts));

