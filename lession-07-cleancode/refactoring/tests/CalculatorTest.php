<?php

require __DIR__ . "/../src/Calculator.php";
//use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestCase;
//extends PHPUnit\Framework\TestCase


class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $c = 1;
        $b = 1;
        $o = '+';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($a, $b, $o);
        $this->assertEquals($expected, $result);
    }
}