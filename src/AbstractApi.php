<?php

namespace NewsApi;

/**
 * Description of AbstractApi
 *
 * @author Rodrigo
 */
class AbstractApi implements InterfaceApi {

    public $url;

    protected function call() {
 
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url,
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

    private function setData($data) {
        $this->data = json_decode($data);
    }

}
