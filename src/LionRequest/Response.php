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
     * Returns an array with the available error types
     *
     * @return array<int, string>
     */
    public function getErrors(): array
    {
        return [
            Status::ERROR,
            Status::DATABASE_ERROR,
            Status::FILE_ERROR,
            Status::MAIL_ERROR,
            Status::ROUTE_ERROR,
            Status::SESSION_ERROR,
            Status::RULE_ERROR,
        ];
    }

    /**
     * stops the execution of the process where the call is made and displays
     * a response
     *
     * @param mixed $response [Message or content to view]
     * @param bool $isJson [Determines with a boolean if it is a JSON object]
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
     * @param string $status [The type of status on the object]
     * @param string|null $message [Message inside the object]
     * @param int $code [HTTP status code inside the object]
     * @param mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
    public static function custom(
        string $status,
        ?string $message = null,
        int $code = Http::OK,
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
     * @param string|null $message [Message inside the object]
     * @param int $code [HTTP status code inside the object]
     * @param mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
    public static function success(?string $message = null, int $code = Http::OK, mixed $data = null): object
    {
        return self::custom(Status::SUCCESS, $message, $code, $data);
    }

    /**
     * Allows you to generate an object of type error
     *
     * @param string|null $message [Message inside the object]
     * @param int $code [HTTP status code inside the object]
     * @param mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
    public static function error(
        ?string $message = null,
        int $code = Http::INTERNAL_SERVER_ERROR,
        mixed $data = null
    ): object {
        return self::custom(Status::ERROR, $message, $code, $data);
    }

    /**
     * Allows you to generate an object of type warning
     *
     * @param string|null $message [Message inside the object]
     * @param int $code [HTTP status code inside the object]
     * @param mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
    public static function warning(?string $message = null, int $code = Http::OK, mixed $data = null): object
    {
        return self::custom(Status::WARNING, $message, $code, $data);
    }

    /**
     * Allows you to generate an object of type info
     *
     * @param string|null $message [Message inside the object]
     * @param int $code [HTTP status code inside the object]
     * @param mixed|null $data [Extra data inside the object]
     *
     * @return object
     */
    public static function info(?string $message = null, int $code = Http::OK, mixed $data = null): object
    {
        return self::custom(Status::INFO, $message, $code, $data);
    }
}
