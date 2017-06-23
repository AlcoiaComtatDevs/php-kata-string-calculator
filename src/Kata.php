<?php


namespace Kata;

class Kata
{
    public function add($stringOfNumbers)
    {
        if (empty($stringOfNumbers)) {
            return 0;
        }

        $separatedNumbers = $this->separateStringByDelimiter($stringOfNumbers, ',');

        $separateNumberNewDelimiter = array();

        foreach ($separatedNumbers as $value) {

            $separateNumberNewDelimiter = array_merge(
                $separateNumberNewDelimiter,
                $this->separateStringByDelimiter($value, "\n")
            );
        }

        $totalSumOfNumbers = array_sum($separateNumberNewDelimiter);

        return $totalSumOfNumbers;
    }

    /**
     * @param $separateNumberNewDelimiter
     * @param $value
     * @param $delimiter
     * @return array
     */
    public function separateStringByDelimiter($value, $delimiter)
    {
        return explode($delimiter, $value);

    }
}
