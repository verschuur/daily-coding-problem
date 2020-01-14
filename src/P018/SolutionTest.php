<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P018;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertSame([10, 7, 8, 8], $solution->solve([10, 5, 2, 7, 8, 7], 3));
        $this->assertSame([10, 5, 7, 8, 8], $solution->solve([10, 5, 2, 7, 8, 7], 2));
        $this->assertSame([10, 8, 8], $solution->solve([10, 5, 2, 7, 8, 7], 4));
    }
}
