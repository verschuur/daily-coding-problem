<?php
declare(strict_types=1);

function solution(int $n)
{
    $bin = decbin($n);
    $count = array_sum(str_split($bin));

    do {
        $n++;
    } while (array_sum(str_split(decbin($n))) !== $count);
    
    return $n;
}
