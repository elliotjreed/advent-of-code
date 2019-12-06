<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayOne;

final class PartTwo
{
    public function solve(string $input): int
    {
        $upsAndDowns = \str_split($input);

        $floor = 0;
        foreach ($upsAndDowns as $directionPosition => $direction) {
            if ($direction === '(') {
                ++$floor;
            } else {
                --$floor;
            }

            if ($floor === -1) {
                return $directionPosition + 1;
            }
        }
    }
}
