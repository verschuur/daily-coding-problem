<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P381;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertSame('TWFu', $solution->solve('Man'));
        //$this->assertSame('3q2+7w==', $solution->solve('deadbeef'));
    }
}
