<?php

require_once 'vendor/autoload.php';

use LionRequest\{ Json, Response };

$response = Response::getInstance();

var_dump(
	$response->success('Efe')
);


var_dump(
	$response->success('Efe')
);

// var_dump(
// 	Response::success('Efe')
// );

// var_dump(
// 	Response::error('Efe')
// );

// var_dump(
// 	Response::warning('Efe')
// );

// var_dump(
// 	Response::info('Efe')
// );