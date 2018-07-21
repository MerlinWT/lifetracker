<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 13:17
 */
class Controller
{
	public function actionIndex() {
		echo '<b>' . \Model::getData() . '<\b><br>';
	}
}