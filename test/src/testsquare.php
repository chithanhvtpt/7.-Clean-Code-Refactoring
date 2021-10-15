<?php
include_once '../Square.php';

use PHPUnit\Framework\TestCase;

class AreaTest extends TestCase
{
    public function testGetArea()
    {
        $expected = 25;
        $square = new Square(5,5);
        $result = $square->getArea();
        $this->assertEquals($result, $expected);
    }}
