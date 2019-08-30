<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P002;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();
        /**
         * Original assertion from problem description:
         * If our input was [1, 2, 3, 4, 5], the expected output would be [120, 60, 40, 30, 24].
         */
        $this->assertSame([120, 60, 40, 30, 24], $solution->solve([1, 2, 3, 4, 5]));

        /**
         * Original assertion from problem description:
         * If our input was [3, 2, 1], the expected output would be [2, 3, 6].
         */
        $this->assertSame([2, 3, 6], $solution->solve([3, 2, 1]));
    }
}
