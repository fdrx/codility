<?php

function solution($A, $K) {

    $count = count($A);

    if ($count < 1 || $K % $count == 0 ) {
        return $A;
    }

    $K = $K % $count;
    $B = [];

    for($i = 0; $i < $count; $i++) {
        $B[$i] = $i > $K - 1 ? $A[$i - $K] : $A[$count - $K + $i];
    }

    return $B;

}