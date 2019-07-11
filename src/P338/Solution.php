<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P338;

class Solution
{
    public function next(int $n)
    {
        $bin = decbin($n);
        $count = array_sum(str_split($bin));

        do {
            $n++;
        } while (array_sum(str_split(decbin($n))) !== $count);
        
        return $n;
    }
}
