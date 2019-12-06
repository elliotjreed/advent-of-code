<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayOne;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayOne\PartOne;

final class PartOneTest extends TestCase
{
    public function testItCalculatesRequiredFuel(): void
    {
        $this->assertSame(2, (new PartOne())->solve([12]));
        $this->assertSame(2, (new PartOne())->solve([14]));
        $this->assertSame(654, (new PartOne())->solve([1969]));
        $this->assertSame(33583, (new PartOne())->solve([100756]));
    }
}
