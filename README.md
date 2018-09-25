# News API SDK for PHP
Coming soon... this is where our officially supported SDK for PHP is going to live.

## Example
```php
<?php
include 'vendor/autoload.php';
$newsapi = new NewsAPI\NewsAPI('your_api_key_here');
$request = $newsapi->category('technology')->language('en')->getTopHeadlines();
// Returns a PHP Object parsed through the JSON response.
var_dump($request);
```

***
