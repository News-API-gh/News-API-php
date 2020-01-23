<?php
 
namespace News;
{
	abstract class Resources
	{
		/* Defaults global vars */
		private static $url ="https://newsapi.org/v2/";
		private static $everything = "everything?";
		private static $sources = "sources?";
		private static $headlines ="top-headlines?";
		
		/* Top Headlines @param{options}*/
		public function setHeadlines($options) :bool
		{		
			self::fetchServerData(self::getHeadlines(json_encode($options)));
			return TRUE;
		}

		/* Everything @param{options}*/
		public function setEverything($options) :bool
		{		
			self::fetchServerData(self::getEverything(json_encode($options)));
			return TRUE;
		}

		/* Sources @param{options}*/
		public function setSources($options) :bool
		{		
			self::fetchServerData(self::getSources(json_encode($options)));
			return TRUE;
		}
		 
		/* Get Headlines @param{options} */
		private static function getHeadlines($query) : string
		{
			$data = json_decode($query);
			return self::$url.''.self::$headlines.'q='.$data->query.'&apiKey='.$data->apiKey.'&country='.$data->country.'&from='.$data->from.'&to='.$data->to.'&language='.$data->language;
		}

		/* Get Everything @param{options} */
		private static function getEverything($query) : string
		{
			$data = json_decode($query);
			return self::$url.''.self::$everything.'q='.$data->query.'&apiKey='.$data->apiKey.'&from='.$data->from.'&to='.$data->to.'&language='.$data->language;
		}

		/* Get Everything @param{options} */
		private static function getSources($query) : string
		{
			//json decode
			$data = json_decode($query);
			return self::$url.''.self::$sources.'q='.$data->query.'&apiKey='.$data->apiKey.'&country='.$data->country.'&from='.$data->from.'&to='.$data->to.'&language='.$data->language;
		}

		/* Collect Server Data @param {endpoint url}*/
		private static function fetchServerData($endPoint)  
		{
			$curl = curl_init();
			curl_setopt_array($curl, Array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => ''.$endPoint
			));
			$resp = curl_exec($curl);
			curl_close($curl);
			return $resp;

		}
	}
}
?>
