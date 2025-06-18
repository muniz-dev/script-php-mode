<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/ModeCalculator.php';

class ModeCalculatorTest extends TestCase
{
    public function testSingleMostFrequent()
    {
        $this->assertEquals(2, ModeCalculator::calculate([1, 2, 2, 2, 3, 4, 5, 6, 7, 8]));
    }

    public function testTieReturnsSmaller()
    {
        $this->assertEquals(1, ModeCalculator::calculate([1, 1, 2, 2, 3, 4, 5, 6, 7, 8]));
    }

    public function testAllUnique()
    {
        $this->assertEquals(1, ModeCalculator::calculate([1,2,3,4,5,6,7,8,9,10]));
    }
}
