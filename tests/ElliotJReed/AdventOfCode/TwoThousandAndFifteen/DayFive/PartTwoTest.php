<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayFive;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayFive\PartTwo;

final class PartTwoTest extends TestCase
{
    public function testItFindsNumberOfNiceWords(): void
    {
        $this->assertSame(1, (new PartTwo())->solve('xyxy'));
        $this->assertSame(1, (new PartTwo())->solve('qjhvhtzxzqqjkmpb'));
        $this->assertSame(1, (new PartTwo())->solve('xxyxx'));
        $this->assertSame(0, (new PartTwo())->solve('uurcxstgmygtbstg'));
        $this->assertSame(0, (new PartTwo())->solve('ieodomkazucvgmuy'));
    }
}
