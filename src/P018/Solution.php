<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P018;

class Solution
{
    public function solve(array $input, int $k): array
    {
        $values = [];

        for ($i = 0; $i < count($input); $i++) {
            $sub = array_slice($input, $i, $k);

            // Break if the sub array is empty or smaller than $k
            if (empty($sub) or count($sub) < $k) {
                break;
            }

            // Sort the subarray (defaults to smallest to largest) and reverse it,
            // putting the largest val on the first position.
            natsort($sub);
            $sub = array_reverse($sub);

            $values[] = $sub[0];
        }

        return $values;
    }
}
