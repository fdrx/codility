<?php

function solution($N) {

    $bin = trim(decbin($N), '0');
    $arr = explode("1", $bin);
    $max = 0;

    if (!empty($arr)) {
        foreach($arr as $k => $v) {
            if (strlen($v) > $max) {
                $max = strlen($v);
            }
        }

    }

    return $max;

}