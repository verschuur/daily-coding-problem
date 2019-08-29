<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P001;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertTrue($solution->solve(17, [10, 15, 3, 7]));
    }
}
