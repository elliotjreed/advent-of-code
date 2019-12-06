<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayThree;

final class PartTwo
{
    public function solve(string $input): int
    {
        $moves = \str_split($input);

        $currentSantaCoordinate = [0, 0];
        $coordinatesVisitedBySanta = [$currentSantaCoordinate];

        $currentRoboSantaCoordinate = [0, 0];
        $coordinatesVisitedByRoboSanta = [$currentRoboSantaCoordinate];

        $santa = true;
        foreach ($moves as $turn => $move) {
            if ($santa) {
                $currentSantaCoordinate = $this->calculateNewCoordinate($move, $currentSantaCoordinate);
                $coordinatesVisitedBySanta[] = $currentSantaCoordinate;
                $santa = false;
            } else {
                $currentRoboSantaCoordinate = $this->calculateNewCoordinate($move, $currentRoboSantaCoordinate);
                $coordinatesVisitedByRoboSanta[] = $currentRoboSantaCoordinate;
                $santa = true;
            }
        }

        return \count(\array_unique(\array_merge($coordinatesVisitedBySanta, $coordinatesVisitedByRoboSanta), SORT_REGULAR));
    }

    private function calculateNewCoordinate(string $move, array $currentCoordinate): array
    {
        if ($move === '>') {
            $currentCoordinate = [$currentCoordinate[0] + 1, $currentCoordinate[1]];
        }
        if ($move === '<') {
            $currentCoordinate = [$currentCoordinate[0] - 1, $currentCoordinate[1]];
        }
        if ($move === '^') {
            $currentCoordinate = [$currentCoordinate[0], $currentCoordinate[1] + 1];
        }
        if ($move === 'v') {
            $currentCoordinate = [$currentCoordinate[0], $currentCoordinate[1] - 1];
        }

        return $currentCoordinate;
    }
}
