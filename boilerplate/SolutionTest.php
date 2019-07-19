<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P_PROBLEM_ID_HERE;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertTrue($solution->solve());
    }
}
