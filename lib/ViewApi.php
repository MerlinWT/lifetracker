<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 13:39
 */
class ViewApi
{
	/**
	 * @param \ModelApi $model
	 * @return string
	 */
	public static function render($model) {
		header('Content-Type: application/json');
		
		return json_encode($model->getData());
	}
}