<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use NewsApi\Api;

final class testApi extends PHPUnit\Framework\TestCase {
    /**
     * 
     * @return void
     */
    public function testwithoutKeyApiCall(): void {
        $new = new Api();
        $data = $new->getData();
        $this->assertEquals($data['error']['apikey'], 'missing apikey');
    }
    /**
     * 
     * @return void
     */
    public function testwithKeywithoutrequiredParametersApiCall(): void {
        $new = new Api([
            'apiKey' => Api::NEWSAPI
        ]);
        $data = $new->getData();


        $this->assertEquals($data->status, 'error');
    }
    /**
     * 
     * @return void
     */
    public function testwithKeywithrequiredParametersApiCall(): void {
        $new = new Api([
            'apiKey' => Api::NEWSAPI,
            'language' => 'pt'
        ]);
        $data = $new->getData();

        $this->assertEquals($data->status, 'ok');
    }

}
