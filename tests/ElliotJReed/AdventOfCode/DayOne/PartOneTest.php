<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\DayOne;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\DayOne\PartOne;

class PartOneTest extends TestCase
{
    public function testItCalculatesNumberOfOpeningBracesMinusClosingBraces(): void
    {
        $this->assertSame(0, (new PartOne())->solve('()()'));
        $this->assertSame(3, (new PartOne())->solve('(()(()('));
        $this->assertSame(3, (new PartOne())->solve('))((((('));
        $this->assertSame(-1, (new PartOne())->solve('))('));
        $this->assertSame(-3, (new PartOne())->solve(')())())'));
    }
}
