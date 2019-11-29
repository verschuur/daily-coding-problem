<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P373;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        // sequence = 1, 2, 3, 4, 5 (length of 5)
        $this->assertEquals(5, $solution->solve([5, 2, 99, 3, 4, 1, 100]));
        
        // sequence = 98, 99, 100, 101, 102, 103 (length of 6)
        $this->assertEquals(6, $solution->solve([102, 5, 98, 2, 99, 3, 103, 4, 101, 1, 100]));

        // sequence = 98, 99, 100 (length of 3)
        $this->assertEquals(3, $solution->solve([102, 5, 98, 2, 99, 9, 103, 4, 101, 1, 105]));
    }
}
