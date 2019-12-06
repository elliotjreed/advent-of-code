<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayOne;

final class PartTwo
{
    public function solve(array $input): int
    {
        $solution = 0;
        foreach ($input as $value) {
            $solution += $this->getFuel($value);
        }

        return $solution;
    }

    public function getFuel(int $fuel): int
    {
        $totalFuel = 0;
        while ($fuel > 0) {
            $fuel = (int) (\floor($fuel / 3) - 2);
            if ($fuel > 0) {
                $totalFuel += $fuel;
            }
        }

        return $totalFuel;
    }
}
