<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\DayFour;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\DayFour\PartTwo;

class PartTwoTest extends TestCase
{
    public function testItFindLowestPossibleNumber(): void
    {
        $this->assertSame(6742839, (new PartTwo())->solve('abcdef'));
        $this->assertSame(5714438, (new PartTwo())->solve('pqrstuv'));
    }
}
