<?php

namespace tests\lib\Console\Run;
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 11:45
 */
class Test extends \Test
{
	
	public function test() {
		ob_clean(); ob_start();
		\Console::run();
		$actual = ob_get_clean();
		
		$this->assertEquals("Just run me again =)\n", $actual);
	}
	
}