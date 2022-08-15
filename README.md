# Lion-Request
Library created to request input data and response requests

## Install
```shell
composer require lion-framework/lion-request
```

## Usage
### 1. REQUEST
The Request class allows us to return different data from different types of HTTP requests, The `capture` method gets the data sent through an HTTP request
```php
use LionRequest\Request;
// HTTP (GET, POST, PUT, DELETE...)
var_dump(Request::capture());
```

They can create an object of the Request class and call the methods
```php
use LionRequest\Request;

$request = Request::getInstance();
var_dump($request->capture());
```

### 2. RESPONSE
The Response class allows us to return different types of response, either for a successful response or for one with an error
```php
use LionRequest\Response;

var_dump(Response::response('success', 'my text...'));
var_dump(Response::success('my text...'));
var_dump(Response::error('my text...'));
var_dump(Response::warning('my text...'));
var_dump(Response::info('my text...'));
```

They can create an object of the Response class and call the methods

```php
use LionRequest\Response;

$response = Response::getInstance();
var_dump($response->response('success', 'my text...'));
var_dump($response->success('my text...'));
var_dump($response->error('my text...'));
var_dump($response->warning('my text...'));
var_dump($response->info('my text...'));
```

### 3. JSON
The Json class allows us to work with different data and properties either to encode them to a JSON format or decode them to an array format
```php
use LionRequest\Json;

$data = [
	'name' => "my name",
	'last_name' => "my last name"
];

$encode = Json::encode($data);
var_dump($encode);
```

```php
$decode = Json::decode($encode);
var_dump($decode);
```

### 4. HEADER
The Request class allows us to create headers
```php
use LionRequest\Request;

Request::header('Access-Control-Allow-Origin', '*');
Request::header('Content-Type', 'application/json; charset=UTF-8');
```

### 5. FINISH
The finish function executes a die internally with its respective response

```php
use LionRequest\Response;

Response::finish(Json::encode([
    'name' => 'Sleon'
]));
```