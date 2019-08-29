<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P001;

class Solution
{
     // return true since 10 + 7 is 17.
    public function solve(int $k, array $list)
    {
        // Optional optimization step #1: Remove all items equal to or larger then $k.
        // Since every number larger or equal to k will fail the precidate,
        // remove it to prevent unnecessary lookups.
        // $list = array_filter($list, function ($item) use ($k) {
        //     return $item < $k;
        // });

        // Optional optimization step #2: If the item count is less then two, return false.
        // If there are less then 2 items in the list, it will fail the precidate,
        // so immediately return false.
        // if (count($list) < 2) {
        //     return false;
        // }
        
        // Optional optimization step #3: The item count is exactly two and their sum equals k.
        // This will match the predicate immediately, so return true
        // if (count($list) === 2 || array_sum($list) === $k) {
        //     return true;
        // }

        // Loop through the list, shifting the first element of the list.
        // Using this element, loop through the remaining array as long as it has two or more elements.
        // If the sum matches $k, return true or return false when there are nog more options.
        while (count($list) >= 2) {
            $val = array_shift($list);

            foreach ($list as $item) {
                if ($val + $item === $k) {
                    return true;
                }
            }
        }

        return false;
    }
}
