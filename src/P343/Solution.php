<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P343;

class Solution
{
    public function solve(int $a, int $b)
    {
        // Granted, building the tree could be nicer,
        // but the problem is about counting the range,
        // not about building the tree.
        $top = new Leaf(
            5,
            new Leaf(3, new Leaf(2), new Leaf(4)),
            new Leaf(8, new Leaf(6), new Leaf(10))
        );

        return $top->process($a, $b);
    }
}
