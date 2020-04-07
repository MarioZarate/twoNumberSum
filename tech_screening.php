<?php


function twoNumberSum($numbers, $target) {
    $storage = [];

    foreach($numbers as $index => $number) {
        $storage[$target - $number] = $index;        
    }

    foreach($numbers as $index => $number) {
        if (@$storage[$number]) {
            if ($storage[$number] != $index) {
                return [$storage[$number], $number];
            }
        }
    }
    
    return [];
}

var_dump(twoNumberSum([3,5,-4,8,11,1,-1,6], 10));
var_dump(twoNumberSum([2,-7,4,8,-11], 56));
