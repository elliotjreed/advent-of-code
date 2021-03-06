<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayTwo;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayTwo\PartTwo;

final class PartTwoTest extends TestCase
{
    public function testItGetsRequiredRibbonLength(): void
    {
        $this->assertSame(34, (new PartTwo())->solve('2x3x4'));
        $this->assertSame(14, (new PartTwo())->solve('1x1x10'));
    }
}
