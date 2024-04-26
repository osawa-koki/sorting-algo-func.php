<?php

require_once 'bubbleSort.php';
require_once 'selectionSort.php';
require_once 'insertionSort.php';
require_once 'mergeSort.php';

$array = range(0, 9);

shuffle($array);
echo 'ShuffledArray: '. join(', ', $array) . PHP_EOL;
echo 'BubbleSort   : '. join(', ', $bubbleSort($array)) . PHP_EOL;

shuffle($array);
echo 'ShuffledArray: '. join(', ', $array) . PHP_EOL;
echo 'SelectionSort: '. join(', ', $selectionSort($array)) . PHP_EOL;

shuffle($array);
echo 'ShuffledArray: '. join(', ', $array) . PHP_EOL;
echo 'InsertionSort: '. join(', ', $insertionSort($array)) . PHP_EOL;

shuffle($array);
echo 'ShuffledArray: '. join(', ', $array) . PHP_EOL;
echo 'MergeSort    : '. join(', ', _mergeSort($array)) . PHP_EOL;
