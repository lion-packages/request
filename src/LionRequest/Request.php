<?php

declare(strict_types=1);

namespace Lion\Request;

/**
 * Allows you to obtain data captured in an HTTP request and modify headers
 *
 * @package lion\Request
 */
class Request
{
    /**
     * Get all values sent via an HTTP request
     *
     * @return object
     */
    public static function capture(): object
    {
        $content = json_decode(file_get_contents('php://input'), true);

        return $content === null ? ((object) [...$_POST, ...$_FILES, ...$_GET]) : ((object) $content);
    }

    /**
     * Is used to send a raw HTTP header
     *
     * @param string $header [This parameter represents the name of the header
     * to be sent]
     * @param string $value [This parameter represents the value of the header
     * to be sent]
     *
     * @return void
     */
    public static function header(string $header, string $value): void
    {
        header("{$header}: {$value}");
    }
}
