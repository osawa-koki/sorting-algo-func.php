<?php

function _mergeSort(array $arr): array
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }

    $mid = floor($len / 2);
    $left = _mergeSort(array_slice($arr, 0, $mid));
    $right = _mergeSort(array_slice($arr, $mid));

    return _merge($left, $right);
}

function _merge(array $left, array $right): array
{
    $result = [];
    $leftIndex = 0;
    $rightIndex = 0;
    $leftLen = count($left);
    $rightLen = count($right);

    while ($leftIndex < $leftLen && $rightIndex < $rightLen) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }

    while ($leftIndex < $leftLen) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }

    while ($rightIndex < $rightLen) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $result;
}

$mergeSort = function ($ary) {
    return _mergeSort($ary);
};

$GLOBALS['mergeSort'] = $mergeSort;
