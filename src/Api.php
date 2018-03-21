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

//put your code here


    const NEWSAPI = '';
    const URL = 'https://newsapi.org/v2/';
    const TOP_HEADLINE = 'top-headlines';
    const EVERYTHING = 'everything';
    const SOURCES = 'sources';
    
    
    /**
     * 
     * @param type $query
     * @param type TOP_HEADLINE | EVERYTHING | SOURCES
     */
    public function __construct($query = array() , $type = self::TOP_HEADLINE ) {
        
        $uri = http_build_query($query);
        $url = self::URL . $type  . "?{$uri}";
        
        //execute
        $this->call($url);
        
    }
    
    
}
