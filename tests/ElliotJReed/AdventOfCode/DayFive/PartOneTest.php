<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\DayFive;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\DayFive\PartOne;

class PartOneTest extends TestCase
{
    public function testItFindsNumberOfNiceWords(): void
    {
        $this->assertSame(1, (new PartOne())->solve('ugknbfddgicrmopn'));
        $this->assertSame(1, (new PartOne())->solve('aaa'));
        $this->assertSame(0, (new PartOne())->solve('jchzalrnumimnmhp'));
        $this->assertSame(0, (new PartOne())->solve('haegwjzuvuyypxyu'));
        $this->assertSame(0, (new PartOne())->solve('dvszwmarrgswjxmb'));
    }
}
