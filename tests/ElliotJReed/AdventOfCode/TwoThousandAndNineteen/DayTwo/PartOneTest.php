<?php

declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayTwo;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayTwo\PartOne;

final class PartOneTest extends TestCase
{
    public function testItCalculatesRequiredFuel(): void
    {
        $this->assertSame('2,0,0,0,99', (new PartOne())->solve('1,0,0,0,99'));
        $this->assertSame('2,3,0,6,99', (new PartOne())->solve('2,3,0,3,99'));
        $this->assertSame('2,4,4,5,99,9801', (new PartOne())->solve('2,4,4,5,99,0'));
        $this->assertSame('30,1,1,4,2,5,6,0,99', (new PartOne())->solve('2,4,4,5,99,0'));
    }
}
