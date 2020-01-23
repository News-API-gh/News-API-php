
# News API Commercial PHP Library.
By Oren Laboratory
Support: 087 057-1581
https://www.orenlabs.com
 
# Installation 
<pre> 
composer require newsorg/commercial

This package is not auto-updated. Please set up the GitHub Service Hook for Packagist so that it gets updated whenever you push!
News API Commercial PHP Library.
</pre>

# Requirements
cUrl Extensions

PHP >= 7.0

 

#Require the class
<pre>
require_once 'News.php';
</pre>


# Include namespace
<pre>
use News\Resources as Articles;
</pre>

 
# Extend base class
<pre>
class Latest extends Articles{
	public function __construct(){
		parent::__construct();
	}
}
</pre>
 

# Usage, Get Everything
 <pre>
 $queryOptionsEverything = Array(
	"apiKey"=>"your-api-key", 
	"from" => "2008-03-02",
	"to"=>"2018-08-05",
	"query" => "news-south-africa",
	"language" => "en"
	);
</pre>
 
 Pass the options to setEverything with argument
 <pre>
 Latest::setEverything($queryOptionsEverything);
 </pre>
 
# Usage, Get sources 
<pre>
 $queryOptionsSources = Array(
	"apiKey"=>"your-api-key", 
	"from" => "2008-03-02",
	"to"=>"2008-03-05",
	"query" => "soccer",
	"country" => "za",
	"language" => "en"
	);
</pre>
 
 Pass the options to setSources with argument
 <pre>
 Latest::setSources($queryOptionsSources);
 </pre>
 
  
# Usage, Get Headlines 
<pre>
 $queryOptionsHeadlines = Array(
	"apiKey"=>"your-api-key", 
	"from" => "2008-03-02",
	"to"=>"2008-03-05",
	"query" => "soccer",
	"country" => "za",
	"language" => "en"
	);
 </pre>
 Pass the options to setHeadlines with argument
 <pre>
 Latest::setHeadlines($queryOptionsHeadlines);
 </pre>
  














</pre>
 
 
