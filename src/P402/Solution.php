<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P402;

class Solution
{
    public function solve(int $n): bool
    {
        // Allowed strobogrammatic numbers
        $horizontal = [0, 1, 8];
        $rotated = [6, 9];

        $input = str_split((string)$n);

        // Return false if the input has any non-strobogrammatic numbers
        if (count(array_diff($input, $horizontal, $rotated)) > 0) {
            return false;
        }

        // Get the rotationally symmetric value of the input
        // Note that using str_replace with arrays isn't an option here due to the replacement order gotcha
        // @see https://www.php.net/manual/en/function.str-replace#refsect1-function.str-replace-notes
        $rev = array_map(function ($n) {
            if ($n == 6) {
                return 9;
            } elseif ($n == 9) {
                return 6;
            } else {
                return $n;
            }
        }, $input);

        // Compare if the rotationally symmetric value equals the reversed input string.
        return implode($rev) === strrev((string)$n);
    }
}
