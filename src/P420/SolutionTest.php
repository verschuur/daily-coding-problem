<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P420;

use RuntimeException;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertSame(19, $solution->solve(1));
        $this->assertSame(28, $solution->solve(2));
        $this->assertSame(37, $solution->solve(3));
        $this->assertSame(46, $solution->solve(4));
        $this->assertSame(55, $solution->solve(5));
        $this->assertSame(64, $solution->solve(6));
        $this->assertSame(73, $solution->solve(7));
        $this->assertSame(82, $solution->solve(8));
        $this->assertSame(91, $solution->solve(9));

        $this->assertSame(334, $solution->solve(33));
        $this->assertSame(721, $solution->solve(72));

        $this->assertSame(3412, $solution->solve(341));
        $this->assertSame(4420, $solution->solve(442));
    }

    public function testSolutionThrowsRuntimeExceptionOnNegativeValue(): void
    {
        $solution = new Solution();

        $this->expectException(RuntimeException::class);
        $solution->solve(-1);
    }
}
