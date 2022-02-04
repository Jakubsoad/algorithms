<?php

function countArray(array $array): int
{
    if (empty($array)) {
        return 0;
    }
    array_pop($array);
    return 1 + countArray($array);
}

$array = range(0, 123);

echo $result = countArray($array);
echo PHP_EOL . (count($array) === $result ? 'true' : 'false');
