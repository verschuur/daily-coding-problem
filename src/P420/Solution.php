<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P420;

use RuntimeException;

class Solution
{
    public function solve(int $input): int
    {
        if ($input < 0) {
            throw new RuntimeException();
        }

        $values = \str_split((string)$input);
        $sum = \array_sum($values);
        $remainder = 10 - $sum;

        return (int)($input . $remainder);
    }
}
