<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P343;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    // and the range [4, 9], return 23 (5 + 4 + 6 + 8).
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertSame(23, $solution->solve(4, 9));
        $this->assertSame(18, $solution->solve(3, 6));
        $this->assertSame(14, $solution->solve(6, 8));
    }
}
