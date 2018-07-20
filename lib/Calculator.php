<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 14.07.18
 * Time: 13:27
 */
class Calculator
{
	
	public function sum($val1, $val2) {
		return $val1 + $val2;
	}
	
	public function multiply(...$args) {
		$result = 1;
		foreach ($args as $val) {
			$result *= $val;
		}
		
		return $result;
	}

    public function division($val1, $val2)
    {
        return $val1 / $val2;
    }

}