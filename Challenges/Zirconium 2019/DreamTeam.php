<?php

// 100%

function solution($A, $B, $F) {

    if ($F == 0) {
        return array_sum($B);
    }

    if ($F == count($A)) {
        return array_sum($A);
    }

    $C = [];

    for($i = 0; $i < count($A); $i++) {
        $C[$i] = ($B[$i] - $A[$i]);
    }

    arsort($C);

    $sum = 0;
    $i = 0;

    foreach($C as $k => $v) {
        if ($i < (count($B) - $F)) {
            $sum += $B[$k];
        } else {
            $sum += $A[$k];
        }
        $i++;
    }

    return $sum;

}

echo solution([7, 1, 4, 4], [5, 3, 4, 3], 2);