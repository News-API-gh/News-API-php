<?php

namespace NewsAPI;

class NewsAPI {
    protected $APIKey, $category, $language, $country;
    private $cu;
    public function __construct($APIKey = null) {
        $this->APIKey = $APIKey;
    }
    public function setAPIKey($APIKey) {
        $this->APIKey = $APIKey;
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
    public function sources() {
        $this->cu = curl_init();
        $curlArgs = [
            CURLOPT_URL => 'https://newsapi.org/v2/sources',
            CURLOPT_HTTPHEADER => array(
                "Authorization: ".$this->APIKey
            ),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0
        ];
        curl_setopt_array($this->cu, $curlArgs);
        return curl_exec($this->cu);
    }
}

?>
