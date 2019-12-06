<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayOne;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayOne\PartTwo;

final class PartTwoTest extends TestCase
{
    public function testItFindsTheFirstMinusOneOccurrence(): void
    {
        $this->assertSame(1, (new PartTwo())->solve(')'));
        $this->assertSame(5, (new PartTwo())->solve('()())'));
    }
}
