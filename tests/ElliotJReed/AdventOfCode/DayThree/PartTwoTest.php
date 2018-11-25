<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\DayThree;

use ElliotJReed\AdventOfCode\DayThree\PartTwo;
use PHPUnit\Framework\TestCase;

class PartTwoTest extends TestCase
{
    public function testItCalculatesDeliveriesToHouses(): void
    {
        $this->assertSame(3, (new PartTwo())->solve('^v'));
        $this->assertSame(3, (new PartTwo())->solve('^>v<'));
        $this->assertSame(11, (new PartTwo())->solve('^v^v^v^v^v'));
    }
}
