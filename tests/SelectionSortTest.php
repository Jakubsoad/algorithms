<?php

include 'src/selection_sort.php';

use PHPUnit\Framework\TestCase;

class SelectionSortTest extends TestCase
{
    public function testSelectionSort(): void
    {
        $unsortedArr = range(0, 1000, 3);
        shuffle($unsortedArr);
        $sortedArr = $unsortedArr;
        sort($sortedArr);

        $this->assertSame(selectionSort($unsortedArr), $sortedArr);
    }
}
