<?php

function _heapSort($arr)
{
    $len = count($arr);
    for ($i = floor($len / 2) - 1; $i >= 0; $i--) {
        _heapify($arr, $len, $i);
    }

    for ($i = $len - 1; $i > 0; $i--) {
        [$arr[0], $arr[$i]] = [$arr[$i], $arr[0]];
        _heapify($arr, $i, 0);
    }

    return $arr;
}

function _heapify(&$arr, $len, $i)
{
    $largest = $i;
    $left = 2 * $i + 1;
    $right = 2 * $i + 2;

    if ($left < $len && $arr[$left] > $arr[$largest]) {
        $largest = $left;
    }

    if ($right < $len && $arr[$right] > $arr[$largest]) {
        $largest = $right;
    }

    if ($largest !== $i) {
        [$arr[$i], $arr[$largest]] = [$arr[$largest], $arr[$i]];
        _heapify($arr, $len, $largest);
    }
}

$heapSort = function ($ary) {
    return _heapSort($ary);
};

$GLOBALS['heapSort'] = $heapSort;
