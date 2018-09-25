<?php

namespace NewsAPI;

class NewsAPI {
    protected $APIKey, $category, $language, $country, $q, $sources, $domains, $from, $to, $sortBy, $page;
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
    public function q($q) {
        $this->q = $q;
        return $this;
    }
    public function sources($sources) {
        $this->sources = $sources;
        return $this;
    }
    public function domains($domains) {
        $this->domains = $domains;
        return $this;
    }
    public function from($from) {
        $this->from = $from;
        return $this;
    }
    public function to($to) {
        $this->to = $to;
        return $this;
    }
    public function sortBy($sortBy) {
        $this->sortBy = $sortBy;
        return $this;
    }
    public function page($page) {
        $this->page = $page;
        return $this;
    }
    public function getTopHeadlines($arr = null) {
        if ($arr != null) {
            $body = $arr;
        }
        else {
            $body = [
                'q' => $this->q,
                'sources' => $this->sources,
                'category' => $this->category,
                'language' => $this->language,
                'country' => $this->country
            ];
        }
        $url = 'https://newsapi.org/v2/top-headlines' . "?" . http_build_query($body);
        return $this->sendRequest($url);
    }
    public function getEverything($arr = null) {
        if ($arr != null) {
            $body = $arr;
        }
        else {
            $body = [
                'q' => $this->q,
                'sources' => $this->sources,
                'domains' => $this->domains,
                'from' => $this->from,
                'to' => $this->to,
                'language' => $this->language,
                'sortBy' => $this->sortBy,
                'page' => $this->page,
            ];
        }
        $url = 'https://newsapi.org/v2/everything' . "?" . http_build_query($body);
        return $this->sendRequest($url);
    }
    public function getSources($arr = null) {
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
        return json_decode(curl_exec($cu));
    }
}

?>
