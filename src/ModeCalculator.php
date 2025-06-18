<?php

class ModeCalculator
{
    /**
     * Calculate the mode of an array of numbers.
     *
     * @param array $numbers The array of numbers to calculate the mode for.
     * @return mixed The mode of the numbers, or null if no mode exists.
     */
    public static function calculate(array $numbers): int
    {   
        $explodeDigits = self::explodeDigits($numbers);
        $frequency = array_count_values($explodeDigits);
        $maxCount = max($frequency);
        $modes = array_keys(array_filter($frequency, fn($count) => $count === $maxCount));
        sort($modes);
        return $modes[0];
    }


    /**
     * Explode an array of numbers into their individual digits.
     *
     * @param array $numbers The array of numbers to explode.
     * @return array An array of individual digits.
     */
    function explodeDigits(array $numbers): array
    {
        $digits = [];

        foreach ($numbers as $number) {
            // Remove zeros à esquerda e quebra em dígitos
            $chars = str_split((string)(int)$number);
            foreach ($chars as $char) {
                $digits[] = (int)$char;
            }
        }

        return $digits;
    }
}
