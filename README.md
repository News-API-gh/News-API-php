# News API SDK for PHP 

Search through millions of articles from over 30,000 large and small news sources and blogs. This includes breaking news as well as lesser articles.

# Example

require_once './src/Api.php';

$api = new \NewsApi\Api( array('q' => 'Reino Unido' , 'language'=> 'pt' , 'apiKey' => newsapi));
$api->getData();
