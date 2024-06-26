<?php

require_once 'bubbleSort.php';
require_once 'selectionSort.php';
require_once 'insertionSort.php';
require_once 'mergeSort.php';
require_once 'quickSort.php';
require_once 'heapSort.php';

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
echo 'MergeSort    : '. join(', ', $mergeSort($array)) . PHP_EOL;

shuffle($array);
echo 'ShuffledArray: '. join(', ', $array) . PHP_EOL;
echo 'QuickSort    : '. join(', ', $quickSort($array)) . PHP_EOL;

shuffle($array);
echo 'ShuffledArray: '. join(', ', $array) . PHP_EOL;
echo 'HeapSort     : '. join(', ', $heapSort($array)) . PHP_EOL;
