<?php


namespace Kata;

class Kata
{
    public function add($string)
    {
        if (empty($string)){
            return 0;
        }

        $separatedNumbers = explode(',',$string);

        return array_sum($separatedNumbers);
    }
}
