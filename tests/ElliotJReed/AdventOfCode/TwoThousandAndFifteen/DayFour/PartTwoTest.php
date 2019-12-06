<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayFour;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayFour\PartTwo;

final class PartTwoTest extends TestCase
{
    public function testItFindLowestPossibleNumber(): void
    {
        $this->assertSame(6742839, (new PartTwo())->solve('abcdef'));
        $this->assertSame(5714438, (new PartTwo())->solve('pqrstuv'));
    }
}
