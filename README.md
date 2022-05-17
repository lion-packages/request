# Lion-Request
Library created to request input data and response requests


## Install
```shell
composer require lion-framework/lion-request
```

## Usage
### 1 Response
The Response class allows us to return different types of response, either for a successful response or for one with an error.

```php
use LionRequest\Response;

var_dump(Response::response('success', 'my description'));
var_dump(Response::success('my description'));
var_dump(Response::error('my description'));
var_dump(Response::warning('my description'));
var_dump(Response::info('my description'));
```

They can create an object of the Response class and call the methods.

```php
use LionRequest\Response;

$response = Response::getInstance();
var_dump($response->response('success', 'my description'));
var_dump($response->success('my description'));
var_dump($response->error('my description'));
var_dump($response->warning('my description'));
var_dump($response->info('my description'));
```

### 2. JSON
The Json class allows us to work with different data and properties either to encode them to a JSON format or decode them to an array format.

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