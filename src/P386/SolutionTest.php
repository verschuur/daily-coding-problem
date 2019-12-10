<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P386;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertSame('eettw', $solution->solve('tweet', Solution::SORT_DESC));
        $this->assertSame('tteew', $solution->solve('tweet', Solution::SORT_DESC));
    }
}
