<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P386;

class SolutionTest extends \PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $solution = new Solution();

        $this->assertSame('eettw', $solution->solve('tweet'));
        $this->assertSame('ooabfr', $solution->solve('foobar'));
        $this->assertSame('llloodehrw', $solution->solve('helloworld'));
        $this->assertSame('zzzzfffaabboorriku', $solution->solve('fizzbuzzfoobarfrak'));
    }
}
