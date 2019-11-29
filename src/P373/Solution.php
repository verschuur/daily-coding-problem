<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P373;

class Solution
{
    /**
     * Assumptions:
     *
     * $list always has at least 1 element.
     */
    public function solve(array $list): int
    {
        // Sort the list going from smallest to largest integer for simplicity's sake.
        asort($list);
        
        // Keep track of the largest sequence length found so far
        $sequenceLength = 0;

        // create a $current sequence to keep track of the largest sequence found so far
        $current = [];

        foreach ($list as $number) {
            // $number is consecutive to the last number, and continue building the current sequence.
            if ($number === (end($current) + 1)) {
                $current[] = $number;
                
                // The length of the current sequence is now larger than the last generated sequence,
                // so store is as the newest largest sequence.
                if (count($current) > $sequenceLength) {
                    $sequenceLength = sizeof($current);
                }
                
                // Return to the start of the loop to process the next number
                continue;
            }
            
            // $number is no longer consecutive to the previous one, so start a new current sequence
            $current = [$number];
        }

        return $sequenceLength;
    }
}
