<?php

function countArray(array $array): int
{
    if (empty($array)) {
        return 0;
    }
    array_pop($array);
    return 1 + countArray($array);
}
