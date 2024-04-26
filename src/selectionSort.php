<?php

/**
 * Selection sort algorithm
 */
$selectionSort = function ($ary)
{
    for ($i = 0; $i < count($ary) - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < count($ary); $j++) {
            if ($ary[$j] < $ary[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex !== $i) {
            $temp = $ary[$i];
            $ary[$i] = $ary[$minIndex];
            $ary[$minIndex] = $temp;
        }
    }
    return $ary;
};

$GLOBALS['selectionSort'] = $selectionSort;
