<?php

namespace NewsApi;

/**
 * Description of AbstractApi
 *
 * @author Rodrigo
 */
class AbstractApi implements InterfaceApi {

    private $data;

    const NEWSAPI = '';
    const URL = 'https://newsapi.org/v2/';
    const TOP_HEADLINE = 'top-headlines';
    const EVERYTHING = 'everything';
    const SOURCES = 'sources';

    protected function call($url) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "UTF-8",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $this->setData($response);

        if ($err) {
            throw new \Exception("cURL Error #:" . $err);
        }
    }

    public function getData() {
        return $this->data;
    }

    protected function setData($data, $encode = true) {

        if ($encode) {
            $this->data = json_decode($data);
        } else {
            
            foreach($data as $key => $value){
                $this->data[$key] = $value;
            }
            
        }
    }

    /**
     * 
     * @param type $query
     * @return type
     */
    protected function validate($query) {


        $validate = (in_array('apiKey', $query) && isset($query['apiKey']) && !empty($query['apiKey'])) ? false : true;
        if ($validate) {
            $obj = ['error' => ['apikey' => 'missing apikey']]; 
            $this->setData($obj, false);
        }

        $validate = (isset($query['type']) && (self::TOP_HEADLINE == $query['type'] || self::SOURCES == $query['type'] || self::EVERYTHING == $query['type'])) ? false : true;
        if ($validate) { 
            $obj = ['error' => ['type' => 'type is not correct']];
            $this->setData($obj, false);
        }

        return $validate;
    }

}
