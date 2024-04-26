<?php

require_once 'bubbleSort.php';

$array = range(0, 9);
shuffle($array);

echo "Shuffled Array: ". join(', ', $array) . PHP_EOL;

echo "BubbleSort". join(", ", bubbleSort($array)) . PHP_EOL;
