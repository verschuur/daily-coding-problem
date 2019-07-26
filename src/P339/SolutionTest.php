<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P339;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        // Given an array of numbers and a number k,
        // determine if there are three entries in the array which add up to the specified number k.
        // For example, given [20, 303, 3, 4, 25] and k = 49, return true as 20 + 4 + 25 = 49.
        $this->assertTrue($solution->solve(49, [20, 303, 3, 4, 25]));
        $this->assertTrue($solution->solve(49, [20, 4, 25]));

        $this->assertFalse($solution->solve(0, [1,2]));
        $this->assertFalse($solution->solve(49, [20, 40, 25]));
        //$this->assertFalse($solution->solve(8, [20, 303, 3, 4, 25]));


        // [20, 303, 3, 4, 25]
        // [3, 4, 303, 20, 25]
    }
}
