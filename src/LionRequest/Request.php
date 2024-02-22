<?php

declare(strict_types=1);

namespace Lion\Request;

class Request
{
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NO_CONTENT = 204;
    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;
    const SEE_OTHER = 303;
    const NOT_MODIFIED = 304;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const INTERNAL_SERVER_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const SERVICE_UNAVAILABLE = 503;

    /**
     * Get all values sent via an HTTP request
     * */
	public static function capture(): object
    {
        $content = json_decode(file_get_contents("php://input"), true);

        return $content === null ? ((object) [...$_POST, ...$_FILES, ...$_GET]) : ((object) $content);
    }

    /**
     * Is used to send a raw HTTP header
     *
     * @param  string $header [This parameter represents the name of the header to be sent]
     * @param  string $value [This parameter represents the value of the header to be sent]
     *
     * @return void
     */
    public static function header(string $header, string $value): void
    {
        header("{$header}: {$value}");
    }
}
