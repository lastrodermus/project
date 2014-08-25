<?php

class Controller {
    protected function changeToArray($urlParameters = null, $urlKeys = null, $parameters = null){
        $url = array();
        $params = array();
        if($urlParameters){
            $url = explode(',', $urlParameters);
            $urlArray = array_combine($urlKeys, $url);
        }
        return array_merge($urlArray, $parameters);
    }
    
}
