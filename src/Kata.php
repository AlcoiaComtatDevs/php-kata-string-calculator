<?php


namespace Kata;

class Kata
{
    public function add($stringOfNumbers)
    {
        if (empty($stringOfNumbers)) {
            return 0;
        }

        if (strpos($stringOfNumbers, '-')){
            throw new \Exception("There is a negative number.");
        }

        $delimiter=',';

        if ($this->checkNewDelimiter($stringOfNumbers)) {
            $delimiter = $this->obtainDelimiter($stringOfNumbers);

            $stringOfNumbers = substr($stringOfNumbers, 3);


        }

        $separatedNumbers = $this->separateStringByDelimiter($stringOfNumbers, $delimiter);

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

    public function checkNewDelimiter($stringOfNumbers)
    {
        return "//" == substr($stringOfNumbers, 0, 2);
    }

    public function obtainDelimiter($stringOfNumbers)
    {
        return substr($stringOfNumbers,2,1);
    }
}
