<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P374;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertEquals(2, $solution->solve([-5, -3, 2, 3]));
        $this->assertEquals(3, $solution->solve([-5, -3, 1, 3, 7]));
        $this->assertEquals(7, $solution->solve([-5, -3, 1, 2, 7, 10, 99999, 7]));
    }
}
