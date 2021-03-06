[PHP Curl Class](https://github.com/php-curl-class/php-curl-class) that makes use of PHP interfaces.

### Changes

`MultiCurl`'s `addGet`, `addPost`, etc. calls changed to `get`, `post` and so on.

#### Regular Curl
```php
// Our response.
$response = null;

// Single Curl request object.
$curl = new Curl();

// Bind success callback.
$curl->success(function($curl) use (&$response) {
    $response = $curl->response;
});

// Send the request.
$curl->get('http://example.com/');

echo $response;
```

#### Async Curl
```php
// Our response.
$response = null;

// Async Curl handler.
$multiCurl = new MultiCurl();

// Add a get request to the queue, it returns the single request object.
$curl = $multiCurl->get('http://example.com/');

// Bind success callback.
$curl->success(function($curl) use (&$response) {
    $response = $curl->response;
});

// Execute all requests in the queue.
$multiCurl->start();

echo $response;
```

### Notes

For other features, read the [Original Package](https://github.com/php-curl-class/php-curl-class) documentation.
