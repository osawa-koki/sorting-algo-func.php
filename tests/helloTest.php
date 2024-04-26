<?php

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
  public function testHello()
  {
    $this->expectOutputString('Hello World!');
    include 'src/main.php';
  }
}
