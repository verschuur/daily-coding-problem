<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P373;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertTrue($solution->solve());
    }
}
