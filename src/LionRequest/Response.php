<?php

declare(strict_types=1);

namespace Lion\Request;

class Response
{
    const SUCCESS = 'success';
    const ERROR = 'error';
    const WARNING = 'warning';
    const INFO = 'info';
    const DATABASE_ERROR = 'database-error';
    const SESSION_ERROR = 'session-error';
    const ROUTE_ERROR = 'route-error';
    const FILE_ERROR = 'file-error';
    const MAIL_ERROR = 'mail-error';

	public static function finish(mixed $response, bool $isJson = true): void
    {
		die($isJson ? json_encode($response) : $response);
	}

	public static function custom(
        string $status,
        ?string $message = null,
        int $code = Request::OK,
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

	public static function success(?string $message = null, int $code = Request::OK, mixed $data = null): object
    {
		return self::custom(self::SUCCESS, $message, $code, $data);
	}

	public static function error(?string $message = null, int $code = Request::INTERNAL_SERVER_ERROR, mixed $data = null): object
    {
		return self::custom(self::ERROR, $message, $code, $data);
	}

	public static function warning(?string $message = null, int $code = Request::OK, mixed $data = null): object
    {
		return self::custom(self::WARNING, $message, $code, $data);
	}

	public static function info(?string $message = null, int $code = Request::OK, mixed $data = null): object
    {
		return self::custom(self::INFO, $message, $code, $data);
	}
}
