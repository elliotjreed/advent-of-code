<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\DayOne;

class DayOneTest extends TestCase
{
    public function testItCalculatesNumberOfOpeningBracesMinusClosingBraces(): void
    {
        $this->assertSame(-3, (new DayOne())->solve(')())())'));
    }
}
