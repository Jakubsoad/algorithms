<?php

include 'src/count_array.php';

use PHPUnit\Framework\TestCase;

class CountArrayTest extends TestCase
{
    public function testCountArray(): void
    {
        $array = range(0, 123);
        $result = countArray($array);

        $this->assertTrue(count($array) === $result);
    }
}
