<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P402;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        // Original assertion from problem description.
        $this->assertTrue($solution->solve(16891));
        
        // Sequence of strobogrammatic numbers taken from the Wikipedia page
        $this->assertTrue($solution->solve(0));
        $this->assertTrue($solution->solve(1));
        $this->assertTrue($solution->solve(8));
        $this->assertTrue($solution->solve(11));
        $this->assertTrue($solution->solve(69));
        $this->assertTrue($solution->solve(88));
        $this->assertTrue($solution->solve(96));
        $this->assertTrue($solution->solve(101));
        $this->assertTrue($solution->solve(111));
        $this->assertTrue($solution->solve(181));
        $this->assertTrue($solution->solve(609));
        $this->assertTrue($solution->solve(619));
        $this->assertTrue($solution->solve(689));
        $this->assertTrue($solution->solve(808));
        $this->assertTrue($solution->solve(818));
        $this->assertTrue($solution->solve(888));
        $this->assertTrue($solution->solve(906));
        $this->assertTrue($solution->solve(916));
        $this->assertTrue($solution->solve(986));
        $this->assertTrue($solution->solve(1001));
        $this->assertTrue($solution->solve(1111));
        $this->assertTrue($solution->solve(1691));
        $this->assertTrue($solution->solve(1881));
        $this->assertTrue($solution->solve(1961));
        $this->assertTrue($solution->solve(6009));
        $this->assertTrue($solution->solve(6119));
        $this->assertTrue($solution->solve(6699));
        $this->assertTrue($solution->solve(6889));
        $this->assertTrue($solution->solve(6969));
        $this->assertTrue($solution->solve(8008));
        $this->assertTrue($solution->solve(8118));
        $this->assertTrue($solution->solve(8698));
        $this->assertTrue($solution->solve(8888));
        $this->assertTrue($solution->solve(8968));
        $this->assertTrue($solution->solve(9006));
        $this->assertTrue($solution->solve(9116));
        $this->assertTrue($solution->solve(9696));
        $this->assertTrue($solution->solve(9886));
        $this->assertTrue($solution->solve(9966));

        // Sequence of random generated numbers which are non-strobogrammatic
        $this->assertFalse($solution->solve(15652));
        $this->assertFalse($solution->solve(1000));
        $this->assertFalse($solution->solve(9696910));
        $this->assertFalse($solution->solve(86955));
        $this->assertFalse($solution->solve(1101100010011));
    }
}
