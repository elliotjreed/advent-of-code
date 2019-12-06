<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayOne;

use ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayOne\PartTwo;
use PHPUnit\Framework\TestCase;

final class PartTwoTest extends TestCase
{
    public function testItCalculatesRequiredFuel(): void
    {
        $this->assertSame(2, (new PartTwo())->solve([14]));
        $this->assertSame(966, (new PartTwo())->solve([1969]));
        $this->assertSame(50346, (new PartTwo())->solve([100756]));
    }
}
