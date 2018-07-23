<?php

/**
 * Created by PhpStorm.
 * User: kov
 * Date: 21.07.18
 * Time: 13:30
 */
class ModelApi
{
	public function getData() {
		//TODO Store version in config
		return [
			'date' => 1532376000,
			'version' =>
				[
					'minor' => 0,
					'major' => 0,
					'build' => 1,
				]
		];
	}
}