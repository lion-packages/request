<?php

namespace LionRequest;

use LionRequest\Traits\Singleton;

class Json {

	use Singleton;

	public static function encode($data) {
		return json_encode($data);
	}

	public static function decode($data) {
		return json_decode($data, true);
	}

}