<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P004;

class Solution
{
    public function solve(array $items)
    {
        // remove all negative integers and sort them ascending
        $items = \array_filter($items, function ($item) {
            return $item >= 1;
        });
        sort($items);

        // Create a range between the first and last values
        $range = range(reset($items), end($items));
        $diff = array_diff($range, $items);
        
        // If there is a diff between the range and the items, get the first item and return it.
        if (!empty($diff)) {
            return reset($diff);
        }
        
        // if there is no diff, then there is no break in the integer sequence of the array.
        // Take the last value, increase it by one and return.
        return end($items)+1;
    }
}
