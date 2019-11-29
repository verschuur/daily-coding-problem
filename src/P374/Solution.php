<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P374;

class Solution
{
    public function solve(array $arr): ?int
    {
        // Sort the list going from smallest to largest integer for simplicity's sake.
        asort($arr);

        foreach ($arr as $key => $val) {
            // Since we're looping from lowest to highest,
            // as soon as the key and val match we're done.
            if ($key === $val) {
                return $key;
            }
            // If at this point no index has been found and we've reached the end of $arr,
            // return null
            if (array_key_last($arr) === $key) {
                return null;
            }
        }
    }
}
