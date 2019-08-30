<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P002;

class Solution
{
    public function solve(array $items)
    {
        return array_map(function ($item) use ($items) {
            return array_product(array_diff($items, [$item]));
        }, $items);
    }
}
