<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayOne;

final class PartOne
{
    public function solve(array $input): int
    {
        $solution = 0;
        foreach ($input as $value) {
            $solution += (int) (\floor($value / 3) - 2);
        }

        return $solution;
    }
}
