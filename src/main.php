<?php

require_once 'bubbleSort.php';
require_once 'selectionSort.php';

$array = range(0, 9);
shuffle($array);

echo "Shuffled Array: ". join(', ', $array) . PHP_EOL;

echo "BubbleSort: ". join(", ", bubbleSort($array)) . PHP_EOL;

echo "Shuffled Array: ". join(', ', $array) . PHP_EOL;

echo "SelectionSort: ". join(", ", selectionSort($array)) . PHP_EOL;
