<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P420;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertSame(19, $solution->solve(1));
        $this->assertSame(28, $solution->solve(2));
    }
}
