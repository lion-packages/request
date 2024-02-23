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
     * [Continue]
     *
     * @const HTTP_CONTINUE
     */
    const HTTP_CONTINUE = 100;

    /**
     * [Switching Protocols]
     *
     * @const HTTP_SWITCHING_PROTOCOLS
     */
    const HTTP_SWITCHING_PROTOCOLS = 101;

    /**
     * [OK]
     *
     * @const HTTP_OK
     */
    const HTTP_OK = 200;

    /**
     * [Created]
     *
     * @const HTTP_CREATED
     */
    const HTTP_CREATED = 201;

    /**
     * [Accepted]
     *
     * @const HTTP_ACCEPTED
     */
    const HTTP_ACCEPTED = 202;

    /**
     * [No Content]
     *
     * @const HTTP_NO_CONTENT
     */
    const HTTP_NO_CONTENT = 204;

    /**
     * [Moved Permanently]
     *
     * @const HTTP_MOVED_PERMANENTLY
     */
    const HTTP_MOVED_PERMANENTLY = 301;

    /**
     * [Found]
     *
     * @const HTTP_FOUND
     */
    const HTTP_FOUND = 302;

    /**
     * [See Other]
     *
     * @const HTTP_SEE_OTHER
     */
    const HTTP_SEE_OTHER = 303;

    /**
     * [Not Modified]
     *
     * @const HTTP_NOT_MODIFIED
     */
    const HTTP_NOT_MODIFIED = 304;

    /**
     * [Bad Request]
     *
     * @const HTTP_BAD_REQUEST
     */
    const HTTP_BAD_REQUEST = 400;

    /**
     * [Unauthorized]
     *
     * @const HTTP_UNAUTHORIZED
     */
    const HTTP_UNAUTHORIZED = 401;

    /**
     * [Forbidden]
     *
     * @const HTTP_FORBIDDEN
     */
    const HTTP_FORBIDDEN = 403;

    /**
     * [Not Found]
     *
     * @const HTTP_NOT_FOUND
     */
    const HTTP_NOT_FOUND = 404;

    /**
     * [Method Not Allowed]
     *
     * @const HTTP_METHOD_NOT_ALLOWED
     */
    const HTTP_METHOD_NOT_ALLOWED = 405;

    /**
     * [Internal Server Error]
     *
     * @const HTTP_INTERNAL_SERVER_ERROR
     */
    const HTTP_INTERNAL_SERVER_ERROR = 500;

    /**
     * [Not Implemented]
     *
     * @const HTTP_NOT_IMPLEMENTED
     */
    const HTTP_NOT_IMPLEMENTED = 501;

    /**
     * [Service Unavailable]
     *
     * @const HTTP_SERVICE_UNAVAILABLE
     */
    const HTTP_SERVICE_UNAVAILABLE = 503;

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
     * @param  string $header [This parameter represents the name of the header
     * to be sent]
     * @param  string $value [This parameter represents the value of the header
     * to be sent]
     *
     * @return void
     */
    public static function header(string $header, string $value): void
    {
        header("{$header}: {$value}");
    }
}
