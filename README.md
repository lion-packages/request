# Lion-Request
Library created to request input data and response requests


## Install
```shell
composer require lion-framework/lion-request
```

## Usage
### 1. JSON
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