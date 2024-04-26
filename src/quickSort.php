<?php

function _quickSort($ary)
{
    if (count($ary) <= 1) {
        return $ary;
    }

    $pivot = $ary[count($ary) - 1];
    $smaller = [];
    $larger = [];

    for ($i = 0; $i < count($ary) - 1; $i++) {
        if ($ary[$i] <= $pivot) {
            $smaller[] = $ary[$i];
        } else {
            $larger[] = $ary[$i];
        }
    }

    return array_merge(_quickSort($smaller), [$pivot], _quickSort($larger));
};

$quickSort = function ($ary) {
    return _quickSort($ary);
};

$GLOBALS['quickSort'] = $quickSort;
