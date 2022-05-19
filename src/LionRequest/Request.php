<?php

namespace LionRequest;

use LionRequest\Traits\Singleton;

class Request {

	use Singleton;

	public static function request(): object {
        $content = json_decode(file_get_contents("php://input"), true);

        if ($content === null) {
            return (object) [...$_POST, ...$_FILES, ...$_GET];
        }

        return (object) $content;
    }

    public static function env(): object {
        return (object) $_ENV;
    }

}