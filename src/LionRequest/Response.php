<?php

declare(strict_types=1);

namespace LionRequest;

class Response
{
	public static function finish(mixed $response, bool $isJson = true): void
    {
		die($isJson ? json_encode($response) : $response);
	}

	public static function response(
        string $status,
        ?string $message = null,
        int $code = 200,
        mixed $data = null
    ): object
    {
        http_response_code($code);

        $response = [
            'code' => $code,
            'status' => $status,
            'message' => $message
        ];

		if (!empty($data)) {
			$response['data'] = $data;
		}

		return (object) $response;
	}

	public static function success(?string $message = null, int $code = 200, mixed $data = null): object
    {
		return self::response('success', $message, $code, $data);
	}

	public static function error(?string $message = null, int $code = 500, mixed $data = null): object
    {
		return self::response('error', $message, $code, $data);
	}

	public static function warning(?string $message = null, int $code = 200, mixed $data = null): object
    {
		return self::response('warning', $message, $code, $data);
	}

	public static function info(?string $message = null, int $code = 200, mixed $data = null): object
    {
		return self::response('info', $message, $code, $data);
	}
}
