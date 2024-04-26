<?php

use PHPUnit\Framework\TestCase;

require_once './src/bubbleSort.php';

class SortTest extends TestCase
{
  private function getTestArray()
  {
    $array = range(0, 9);
    shuffle($array);
    return $array;
  }

  public function testBubbleSort()
  {
    $shuffledArray = $this->getTestArray();
    $sortedArray = bubbleSort($shuffledArray);
    for ($i = 1; $i < 9; $i++) {
      $this->assertGreaterThan($sortedArray[$i - 1], $sortedArray[$i]);
    }
  }
}
