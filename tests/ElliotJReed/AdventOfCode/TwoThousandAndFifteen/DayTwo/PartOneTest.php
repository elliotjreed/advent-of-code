<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayTwo;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayTwo\PartOne;

final class PartOneTest extends TestCase
{
    public function testItGetsRequiredAmountOfPaperFromPresentDimensions(): void
    {
        $this->assertSame(58, (new PartOne())->solve('2x3x4'));
        $this->assertSame(43, (new PartOne())->solve('1x1x10'));
    }
}
