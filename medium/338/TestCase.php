<?php
declare(strict_types=1);

include 'solution.php';

class TestCase extends PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        /**
         * Original assertion from problem description.
         * 6 = 0110
         * 9 = 1001
         */
        $this->assertSame(9, solution(6));

        /**
         * 10 = 1010
         * 12 = 1100
         */
        $this->assertSame(12, solution(10));

        /**
         * 10 = 1010
         * 12 = 1100
         */
        $this->assertSame(14, solution(13));
    }
}
