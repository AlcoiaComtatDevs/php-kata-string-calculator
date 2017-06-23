<?php


namespace Kata;

class Kata
{
    public function add($string)
    {
        if (empty($string)) {
            return 0;
        }

        $separatedNumbers = explode(',', $string);

        $totalSumOfNumbers = 0;
        foreach ($separatedNumbers as $value) {
            $separateNumberNewDelimiter = explode("\n", $value);
            $totalSumOfNumbers += array_sum($separateNumberNewDelimiter);
        }

        return $totalSumOfNumbers;
    }
}
