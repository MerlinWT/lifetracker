<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 13:17
 */
class ControllerApi
{
	public function actionVersion() {
		echo \ViewApi::render(new \ModelApi());
	}
}