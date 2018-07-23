<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 11:42
 */
class Console extends Application
{
	
	//TODO Implement Singleton pattern
	
	public static function run($request) {
		$controller = new \ControllerConsole();
		
		$controller->actionUsage();
	}
	
}