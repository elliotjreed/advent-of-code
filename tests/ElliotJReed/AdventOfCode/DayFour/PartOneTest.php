<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\DayFour;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\DayFour\PartOne;

class PartOneTest extends TestCase
{
    public function testItFindLowestPossibleNumber(): void
    {
        $this->assertSame(609043, (new PartOne())->solve('abcdef'));
        $this->assertSame(1048970, (new PartOne())->solve('pqrstuv'));
    }
}
