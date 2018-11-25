<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\DayThree;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\DayThree\PartOne;

class PartOneTest extends TestCase
{
    public function testItCalculatesDeliveriesToHouses(): void
    {
        $this->assertSame(2, (new PartOne())->solve('>'));
        $this->assertSame(4, (new PartOne())->solve('^>v<'));
        $this->assertSame(2, (new PartOne())->solve('^v^v^v^v^v'));
    }
}
