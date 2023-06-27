<?php

namespace LionRequest;

use LionRequest\Json;
use LionRequest\Traits\Singleton;

class Response {

	use Singleton;

	private static int $code = 200;

	public static function code(int $code): Response {
		self::$code = $code;
		http_response_code($code);
		return self::getInstance();
	}

	public static function finish(mixed $response): void {
		die(Json::encode($response));
	}

	public static function response(string $status, ?string $message = null, mixed $data = null): object {
		if ($data != null) {
			return (object) ['code' => self::$code, 'status' => $status, 'message' => $message, 'data' => $data];
		}

		return (object) ['code' => self::$code, 'status' => $status, 'message' => $message];
	}

	public static function success(?string $message = null, mixed $data = null): object {
		return self::response('success', $message, $data);
	}

	public static function error(?string $message = null, mixed $data = null): object {
		return self::response('error', $message, $data);
	}

	public static function warning(?string $message = null, mixed $data = null): object {
		return self::response('warning', $message, $data);
	}

	public static function info(?string $message = null, mixed $data = null): object {
		return self::response('info', $message, $data);
	}

}