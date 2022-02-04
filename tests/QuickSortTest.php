<?php

include "src/quick_sort_recursive.php";

use PHPUnit\Framework\TestCase;

class QuickSortTest extends TestCase
{
    public function testQuickSort(): void
    {
        $array = range(0, 100);
        shuffle($array);

        $this->assertTrue(quickSort($array) === range(0, 100));
    }
}
