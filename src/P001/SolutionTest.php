<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P001;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    private $solution;

    public function setup(): void
    {
        parent::setup();

        $this->solution = new Solution();
    }

    public function testIsFalsyWhenItemCountIsLessThenTwo(): void
    {
        $this->assertFalse($this->solution->solve(10, [10, 12, 15]));
    }

    public function testIsTruthyWhenItemCountIsTwoAndEqualsInputValue(): void
    {
        $this->assertTrue($this->solution->solve(10, [4, 6, 15]));
    }

    public function testIsTruthyWithCorrectInputs(): void
    {
        $this->assertTrue($this->solution->solve(17, [10, 15, 3, 7]));
        $this->assertTrue($this->solution->solve(10, [1, 14, 33, 9]));
        $this->assertTrue($this->solution->solve(13, [1, 9, 4, 5]));
    }

    public function testIsFalsyWithCorrectInputs(): void
    {
        $this->assertFalse($this->solution->solve(120, [10, 15, 3, 7]));
        $this->assertFalse($this->solution->solve(120, [1, 14, 33, 9]));
        $this->assertFalse($this->solution->solve(120, [3, 67, 99, 56]));
    }
}
