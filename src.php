<?php

namespace NewsAPI;

class NewsAPI {
    protected $APIKey, $category, $language, $country;
    public function __construct($APIKey = null) {
        $this->APIKey = $APIKey;
    }
    public function setAPIKey($APIKey) {
        $this->APIKey = $APIKey;
        return $this;
    }
    public function category($category) {
        $this->category = $category;
        return $this;
    }
    public function language($language) {
        $this->language = $language;
        return $this;
    }
    public function country($country) {
        $this->country = $country;
        return $this;
    }
    public function sources($arr = null) {
        if ($arr != null) {
            $body = $arr;
        }
        else {
            $body = [
                'country' => $this->country,
                'language' => $this->language,
                'category' => $this->category
            ];
        }
        $url = 'https://newsapi.org/v2/sources' . "?" . http_build_query($body);
        return $this->sendRequest($url);
    }
    private function sendRequest($url) {
        $cu = curl_init();
        $curlArgs = [
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => [
                "Authorization: ".$this->APIKey
            ],
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0
        ];
        curl_setopt_array($cu, $curlArgs);
        return curl_exec($cu);
    }
}

?>
