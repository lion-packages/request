<?php

declare(strict_types=1);

namespace Lion\Request;

class Request
{
	public static function capture(): object
    {
        $content = json_decode(file_get_contents("php://input"), true);

        return $content === null ? ((object) [...$_POST, ...$_FILES, ...$_GET]) : ((object) $content);
    }

    public static function header(string $type, string $value): void
    {
        header("{$type}: {$value}");
    }
}
