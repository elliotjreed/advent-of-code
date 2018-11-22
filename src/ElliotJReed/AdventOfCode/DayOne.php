<?php
declare(strict_types=1);

namespace ElliotJReed\AdventOfCode;

class DayOne
{
    public function solve(string $input): int
    {
        $upOneFloorCount = substr_count($input, '(');
        $downOneFloorCount = substr_count($input, ')');

        return $upOneFloorCount - $downOneFloorCount;
    }
}
