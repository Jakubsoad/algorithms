<?php

include 'src/sum_recursive.php';

use PHPUnit\Framework\TestCase;

class SumRecursiveTest extends TestCase
{
    public function testSumRecursive(): void
    {
        $arr = [
            rand(0, 1000),
            rand(0, 1000),
            rand(0, 1000),
            rand(0, 1000),
            rand(0, 1000),
        ];

        $this->assertSame(sum($arr), array_sum($arr));
    }
}
