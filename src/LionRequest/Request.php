<?php

namespace LionRequest;

use LionRequest\Traits\Singleton;

class Request {

	use Singleton;

	public static function capture(): object {
        $content = json_decode(file_get_contents("php://input"), true);

        if ($content === null) {
            return (object) [...$_POST, ...$_FILES, ...$_GET];
        }

        return (object) $content;
    }

    public static function header(array $headers): void {
        foreach ($headers as $key => $header) {
            $header = (object) $header;
            header("{$header->type}: {$header->value}");
        }
    }

}