<?php

function quickSort(array $array): array
{
    if (count($array) < 2) {
        return $array;
    }

    $pivot = array_pop($array);
    $smaller = [];
    $bigger = [];
    $result = [];

    foreach ($array as $item) {
        if ($item >= $pivot) {
            $bigger[] = $item;
        } else {
            $smaller[] = $item;
        }
    }

    return array_merge($result, quickSort($smaller), [$pivot], quickSort($bigger));
}
