<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P004;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        /**
         * Original assertion from problem description:
         * For example, the input [3, 4, -1, 1] should give 2.
         */
        $this->assertSame(2, $solution->solve([3, 4, -1, 1]));

        /**
         * Original assertion from problem description:
         * The input [1, 2, 0] should give 3.
         */
        $this->assertSame(3, $solution->solve([1, 2, 0]));
    }
}
