<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayTwo;

final class PartOne
{
    public function solve(string $input): string
    {
        $array = \array_map('intval', \explode(',', \trim($input)));

        $solution = $array;

        if ($array[0] === 1) {
            $solution[$array[1]] = ($array[$array[1]] + $array[$array[2]]);
        }

        if ($array[0] === 2) {
            $solution[$array[1]] = $array[$array[1]] * $array[$array[2]];
        }

        return \implode(',', $solution);
    }
}
