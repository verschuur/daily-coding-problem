<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P007;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        /**
         * Original assertion from problem description:
         * For example, the message '111' would give 3, since it could be decoded as 'aaa', 'ka', and 'ak'
         */
        $this->assertSame(3, $solution->solve(111));
    }
}
