<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NewsApi;

/**
 * Description of Api
 *
 * @author Rodrigo
 */
class Api extends AbstractApi {

    /**
     * 
     * @param type $query
     * @param type TOP_HEADLINE | EVERYTHING | SOURCES
     */
    public function __construct($query = array(), $type = self::TOP_HEADLINE) {

        $uri = http_build_query($query);
        $url = self::URL . $type . "?{$uri}";
 
        
        if ($this->validate($query) && $this->validate(['type' => $type])) {
            //execute
            $this->call($url);
        }
    }

   
}
