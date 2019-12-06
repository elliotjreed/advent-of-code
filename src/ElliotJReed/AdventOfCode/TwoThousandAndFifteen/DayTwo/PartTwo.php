<?php
declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayTwo;

final class PartTwo
{
    public function solve(string $input): int
    {
        $dimensionList = \explode("\n", \trim($input));
        $totalRequireRibbon = 0;
        foreach ($dimensionList as $dimensions) {
            $dimensionsArray = \explode('x', $dimensions);
            \sort($dimensionsArray, SORT_DESC);

            $totalRequireRibbon += (($dimensionsArray[0] * 2) + ($dimensionsArray[1] * 2)) + ($dimensionsArray[0] * $dimensionsArray[1] * $dimensionsArray[2]);
        }

        return $totalRequireRibbon;
    }
}
