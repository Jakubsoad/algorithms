<?php

function findSmallest(array $array): int
{
    $smallestIndex = 0;
    foreach ($array as $key => $item) {
        if ($array[$smallestIndex] > $item) {
            $smallestIndex = $key;
        }
    }

    return $smallestIndex;
}

function selectionSort(array $array): array
{
    $returnArr = [];
    $count = count($array);
    for ($i=0;$i<$count;$i++) {
        $array = array_values($array);
        $smallestIndex = findSmallest($array);
        $returnArr[] = $array[$smallestIndex];
        unset($array[$smallestIndex]);
    }

    return $returnArr;
}

$unsortedArr = [];
for ($i=0;$i<10;$i++) {
    $unsortedArr[] = rand(0, 100);
}

var_dump(selectionSort($unsortedArr));
