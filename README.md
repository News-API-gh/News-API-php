# News API SDK for PHP
Coming soon... this is where our officially supported SDK for PHP is going to live.

## Example
```php
<?php
include 'vendor/autoload.php';
$newsapi = NewsAPI\NewsAPI('your_api_key_here');
$request = $newsapi->category('technology')->language('en')->getTopHeadlines();
```

***

## Developers... we need you!
We need some help fleshing out this repo. If you're a PHP dev with experience building Composer-compatible libraries and web API wrappers, we're offering a reward of $250 to help us get started. For more info please email support@newsapi.org, or dive right in and send us a pull request.
