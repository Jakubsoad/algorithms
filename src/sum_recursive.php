<?php

function sum(array $array): int
{
    if (count($array) === 0) {
        return 0;
    }

    return array_pop($array) + sum($array);
}

$arr = [1, 2, 3];

echo sum($arr);

$arr = [123123123123, 1231231234235345, 535987349587394857];

echo PHP_EOL;
echo sum($arr) === array_sum($arr);
