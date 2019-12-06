<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayOne;

final class PartOne
{
    public function solve(string $input): int
    {
        $upOneFloorCount = \substr_count($input, '(');
        $downOneFloorCount = \substr_count($input, ')');

        return $upOneFloorCount - $downOneFloorCount;
    }
}
