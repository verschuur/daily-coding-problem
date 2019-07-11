<?php
declare(strict_types=1);

use Verschuur\DailyCodingProblem\P338\Solution;

class SolutionTest extends PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        /**
         * Original assertion from problem description.
         * 6 = 0110
         * 9 = 1001
         */
        $this->assertSame(9, Solution(6));

        /**
         * 10 = 1010
         * 12 = 1100
         */
        $this->assertSame(12, Solution(10));

        /**
         * 10 = 1010
         * 12 = 1100
         */
        $this->assertSame(14, Solution(13));
    }
}
