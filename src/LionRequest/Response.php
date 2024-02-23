<?php

declare(strict_types=1);

namespace Lion\Request;

/**
 * Allows you to manage custom or already defined response objects
 *
 * @package Lion\Request
 */
class Response
{
    /**
     * Represents a correct response object
     *
     * @const SUCCESS
     */
    const SUCCESS = 'success';

    /**
     * Represents an error response object
     *
     * @const ERROR
     */
    const ERROR = 'error';

    /**
     * Represents a warning response object
     *
     * @const WARNING
     */
    const WARNING = 'warning';

    /**
     * Represents an information response object
     *
     * @const INFO
     */
    const INFO = 'info';

    /**
     * Represents a database error response object
     *
     * @const DATABASE_ERROR
     */
    const DATABASE_ERROR = 'database-error';

    /**
     * Represents a sesion error response object
     *
     * @const DATABASE_ERROR
     */
    const SESSION_ERROR = 'session-error';

    /**
     * Represents a route error response object
     *
     * @const DATABASE_ERROR
     */
    const ROUTE_ERROR = 'route-error';

    /**
     * Represents a file error response object
     *
     * @const DATABASE_ERROR
     */
    const FILE_ERROR = 'file-error';

    /**
     * Represents a mail error response object
     *
     * @const DATABASE_ERROR
     */
    const MAIL_ERROR = 'mail-error';

    /**
     * Returns an array with the available error types
     *
     * @return array<string>
     */
    public function getErrors(): array
    {
        return [
            self::ERROR,
            self::DATABASE_ERROR,
            self::FILE_ERROR,
            self::MAIL_ERROR,
            self::ROUTE_ERROR,
            self::SESSION_ERROR
        ];
    }

    /**
     * stops the execution of the process where the call is made and displays
     * a response
     *
     * @param  mixed $response [Message or content to view]
     * @param  bool $isJson [Determines with a boolean if it is a JSON object]
     *
     * @return void
     */
	public static function finish(mixed $response, bool $isJson = true): void
    {
		die($isJson ? json_encode($response) : $response);
	}

    /**
     * Allows you to generate a custom response object
     *
     * @param  string $status [The type of status on the object]
     * @param  string|null $message [Message inside the object]
     * @param  int $code [HTTP status code inside the object]
     * @param  mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
	public static function custom(
        string $status,
        ?string $message = null,
        int $code = Request::HTTP_OK,
        mixed $data = null
    ): object {
        http_response_code($code);
        $response = ['code' => $code, 'status' => $status, 'message' => $message];

		if (!empty($data)) {
			$response['data'] = $data;
		}

		return (object) $response;
	}

    /**
     * Allows you to generate an object of type success
     *
     * @param  string|null $message [Message inside the object]
     * @param  int $code [HTTP status code inside the object]
     * @param  mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
	public static function success(?string $message = null, int $code = Request::HTTP_OK, mixed $data = null): object
    {
		return self::custom(self::SUCCESS, $message, $code, $data);
	}

    /**
     * Allows you to generate an object of type error
     *
     * @param  string|null $message [Message inside the object]
     * @param  int $code [HTTP status code inside the object]
     * @param  mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
	public static function error(
        ?string $message = null,
        int $code = Request::HTTP_INTERNAL_SERVER_ERROR,
        mixed $data = null
    ): object {
		return self::custom(self::ERROR, $message, $code, $data);
	}

    /**
     * Allows you to generate an object of type warning
     *
     * @param  string|null $message [Message inside the object]
     * @param  int $code [HTTP status code inside the object]
     * @param  mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
	public static function warning(?string $message = null, int $code = Request::HTTP_OK, mixed $data = null): object
    {
		return self::custom(self::WARNING, $message, $code, $data);
	}

    /**
     * Allows you to generate an object of type info
     *
     * @param  string|null $message [Message inside the object]
     * @param  int $code [HTTP status code inside the object]
     * @param  mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
	public static function info(?string $message = null, int $code = Request::HTTP_OK, mixed $data = null): object
    {
		return self::custom(self::INFO, $message, $code, $data);
	}
}
