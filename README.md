[![Build Status](https://travis-ci.org/rodrigomanara/News-API-php.svg?branch=master)](https://travis-ci.org/rodrigomanara/News-API-php.svg?branch=master)
[![Latest Stable Version](https://poser.pugx.org/rmanara/News-API-php/v/stable)](https://packagist.org/packages/rmanara/News-API-php)
[![License](https://poser.pugx.org/rmanara/News-API-php/license)](https://packagist.org/packages/rmanara/News-API-php)
[![Latest Unstable Version](https://poser.pugx.org/rmanara/News-API-php/v/unstable)](https://packagist.org/packages/rmanara/News-API-php)



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

