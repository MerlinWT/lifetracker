<?php

namespace tests\lib\Application\Run;
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 11:45
 */
class Test extends \BaseTest
{
	
	public function test() {
		ob_clean(); ob_start();
		\Application::run();
		$actual = ob_get_clean();
		
		$this->assertEquals("hello world", $actual);
	}
	
}