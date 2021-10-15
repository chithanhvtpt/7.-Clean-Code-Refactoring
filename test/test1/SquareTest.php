<?php
include_once '../src/Square.php';

use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    public function testGetArea()
    {
        $expected = 25;
        $square = new Square(5,5);
        $result = $square->getArea();
        $this->assertEquals($result, $expected);
    }
}
