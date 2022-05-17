<?php

require_once 'vendor/autoload.php';

use LionRequest\{ Json, Response };

$data = ['name' => "Sergio Leon", 'age' => 22];

$encode = Json::encode($data);
$decode = Json::decode($encode);

var_dump(
	Response::success('Efe')
);

var_dump(
	Response::error('Efe')
);

var_dump(
	Response::warning('Efe')
);

var_dump(
	Response::info('Efe')
);