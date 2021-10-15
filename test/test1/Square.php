<?php

class Square
{
    public $a;
    public $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea()
    {
        $area = $this->a * $this->b;
        return $area;
    }

}