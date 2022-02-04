<?php

function binarySearch(array $sortedList, int $search): ?int
{
    $low = 0;
    $high = count($sortedList)-1;

    while ($low <= $high) {
        $mid = round(($low + $high) / 2);
        $guess = $sortedList[$mid];

        if ($guess === $search) {
            return $mid;
        } elseif ($guess > $search) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return null;
}
