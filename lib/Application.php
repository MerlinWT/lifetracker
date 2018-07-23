<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 11:42
 */
class Application
{
	
	//TODO Implement Singleton pattern
	
	/**
	 * @param array $request
	 */
	public static function run($request) {
		list (, $controller, $action) = explode('/', $request['url']);
		$controller = self::getController($controller);
		$action = self::getActionName($action);
		
		$controller->$action();
	}
	
	/**
	 * @param $controller
	 * @return \ControllerApi
	 */
	protected static function getController($controller) {
		$controller_obj = null;
		
		switch ($controller) {
			case 'api':
				$controller_obj = new \ControllerApi();
				break;
			default:
				//TODO Create Error (404)
		}
		
		return $controller_obj;
	}
	
	/**
	 * @param $action
	 * @return string
	 */
	protected static function getActionName($action) {
		$action = ucfirst($action);
		$action = "action{$action}";
		return $action;
	}
	
}