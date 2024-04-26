<?php

use PHPUnit\Framework\TestCase;

require_once './src/bubbleSort.php';
require_once './src/selectionSort.php';
require_once './src/insertionSort.php';

class SortTest extends TestCase
{
    private function getTestArray()
    {
        $array = range(0, 9);
        shuffle($array);
        return $array;
    }

    public function testSort()
    {
        // 関数をそのまま配列にすると、呼び出し時にNULLになってしまう。
        // そのため、GLOBALS変数に連想配列として格納し、キーを使って呼び出す。
        $sortingFunctionNames = [
            'bubbleSort',
            'selectionSort',
            'insertionSort'
        ];

        foreach ($sortingFunctionNames as $sortingFunctionName) {
            $shuffledArray = $this->getTestArray();
            $sortedArray = $GLOBALS[$sortingFunctionName]($shuffledArray);
            for ($i = 1; $i < count($sortedArray); $i++) {
                $this->assertGreaterThan($sortedArray[$i - 1], $sortedArray[$i]);
            }
        }
    }
}
