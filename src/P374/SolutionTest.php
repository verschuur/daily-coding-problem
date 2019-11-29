<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P374;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertEquals(2, $solution->solve([-5, -3, 2, 3]));
    }
}
