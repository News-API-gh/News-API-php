# News API SDK for PHP


require_once './src/Api.php';

$api = new \NewsApi\Api( array('q' => 'Reino Unido' , 'language'=> 'pt' , 'apiKey' => newsapi));
$api->getData();
