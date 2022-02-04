<?php

include 'src/binary_search.php';

use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public function testBinarySearch()
    {
        $sortedList = range(2, 1000, 2);
        $search = rand(0, 1000);
        $binarySearchResult = binarySearch($sortedList, $search);
        if ($search % 2 === 0) {
            $this->assertEquals($sortedList[$binarySearchResult], $search);
        } else {
            $this->assertTrue($binarySearchResult === null);
        }
    }
}
