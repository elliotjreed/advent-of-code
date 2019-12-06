<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayFive;

final class PartTwo
{
    public function solve(string $input): int
    {
        $words = \explode("\n", $input);

        $niceWords = 0;
        foreach ($words as $word) {
            if ($this->containsMultiplePairs($word) && $this->containsRepeatedCharacterWithOneCharacterInBetween($word)) {
                $niceWords++;
            }
        }

        return $niceWords;
    }

    private function containsMultiplePairs(string $word): bool
    {
        $characters = \str_split($word);
        $characterPairs = [];
        foreach ($characters as $index => $character) {
            if (isset($characters[$index + 1])) {
                $characterPair = [$character, $characters[$index + 1]];
                if (!isset($characterPairs[$index - 1]) || $characterPair !== $characterPairs[$index - 1]) {
                    $characterPairs[] = $characterPair;
                }
            }
        }

        return \count($characterPairs) !== \count(\array_unique($characterPairs, SORT_REGULAR));
    }

    private function containsRepeatedCharacterWithOneCharacterInBetween(string $word): bool
    {
        $characters = \str_split($word);
        foreach ($characters as $index => $character) {
            if (isset($characters[$index + 2]) && $character === $characters[$index + 2]) {
                return true;
            }
        }

        return false;
    }
}
