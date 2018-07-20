<?php

namespace tests\lib\Calculator\Sum;

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 14.07.18
 * Time: 13:29
 */

class Test extends \tests\lib\Calculator\Base
{

	public function test() {
		$calculator = $this->getTestInstance();
		$this->assertEquals(3, $calculator->sum(1,2));
	}
	
}