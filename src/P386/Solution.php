<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P386;

class Solution
{
    public function solve(string $input): string
    {
        $chars = count_chars($input, 1);
        arsort($chars, SORT_NUMERIC);
        
        $res = '';
        foreach ($chars as $char => $count) {
            $res .= str_repeat(chr($char), $count);
        }

        return $res;
    }
}
