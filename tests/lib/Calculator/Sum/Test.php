<?php

namespace home\kov\lifetracker\tests\lib\Calculator\Sum;

include_once "/home/kov/lifetracker/lib/Calculator.php";
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 14.07.18
 * Time: 13:29
 */

class Test extends \PHPUnit\Framework\TestCase
{
	
	public function __construct($name = null, array $data = [], $dataName = '') {
		parent::__construct($name, $data, $dataName);
	}
	
	public function test() {
		$calculator = new \Calculator();
		$this->assertEquals(3, $calculator->sum(1,2));
	}
	
}