<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function Add(string $numString): int
    {
        if (empty($numString)) {
            return 0;
        }

        $numString = str_replace("\n", ',', $numString);

        if (str_contains($numString, ',')) {
            return array_sum(explode(',', $numString));
        }

        return $numString;
    }
}