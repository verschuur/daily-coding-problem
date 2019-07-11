<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P338;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        /**
         * Original assertion from problem description.
         * 6 = 0110
         * 9 = 1001
         */
        $this->assertSame(9, $solution->next(6));

        /**
         * 10 = 1010
         * 12 = 1100
         */
        $this->assertSame(12, $solution->next(10));

        /**
         * 10 = 1010
         * 12 = 1100
         */
        $this->assertSame(14, $solution->next(13));
    }
}
