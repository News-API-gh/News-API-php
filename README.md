[![Build Status](https://travis-ci.org/rodrigomanara/News-API-php.svg?branch=master)](https://travis-ci.org/rodrigomanara/News-API-php.svg?branch=master)

# News API SDK for PHP 

Search through millions of articles from over 30,000 large and small news sources and blogs. This includes breaking news as well as lesser articles.
find out more about it: [documentation](https://newsapi.org/docs/)

# Example
```
require_once __DIR__ . '/../vendor/autoload.php';

$api = new \NewsApi\Api( array('q' => 'Reino Unido' , 'language'=> 'pt' , 'apiKey' => newsapi));

$api->getData();
```

# Composer install

> composer require rmanara/news-api-php

