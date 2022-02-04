<?php

function sum(array $array): int
{
    if (count($array) === 0) {
        return 0;
    }

    return array_pop($array) + sum($array);
}
