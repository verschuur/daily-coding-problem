<?php
declare(strict_types=1);

include 'solution.php';

class TestCase extends PHPUnit\Framework\TestCase
{
    public function testSolution(): void
    {
        $this->assertTrue(solution());
    }
}
