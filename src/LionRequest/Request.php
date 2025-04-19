<?php

declare(strict_types=1);

namespace Lion\Request;

use stdClass;

/**
 * Allows you to obtain data captured in an HTTP request and modify headers
 *
 * @package lion\Request
 */
class Request
{
    /**
     * [Defines the value of the input]
     *
     * @var string|null $input
     */
    public static ?string $input = null;

    /**
     * This getInput method retrieves and returns the full body of the incoming
     * HTTP request. It uses file_get_contents('php://input') to read the raw
     * data sent to the server, which is useful for handling requests with data
     * in formats like JSON or XML in PHP applications
     *
     * @return string
     */
    private static function getInput(): string
    {
        /** @var string $input */
        $input = file_get_contents('php://input');

        return self::$input ?? $input;
    }

    /**
     * Get all values sent via an HTTP request
     *
     * @return stdClass
     */
    public static function capture(): stdClass
    {
        $input = self::getInput();

        if (empty($input)) {
            return (object) [
                ...$_POST,
                ...$_FILES,
                ...$_GET,
                ...$_SERVER,
            ];
        }

        return (object) json_decode($input, true);
    }
}
