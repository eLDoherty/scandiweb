<?php

class Route {

    // For default controller, method , and parameters
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
        
    // Rewrite Controller name if exist in folder controller
        if(file_exists('../backend/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../backend/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

    // Rewrite Method
        if( isset($url[1] ) ) {
            if( method_exists( $this->controller , $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
    // Parameters
        if( !empty($url) ) {
            $this->params = array_values($url);
        }

    // Run controller & method and send the parameters when exist
        call_user_func_array([$this->controller , $this->method] , $this->params);
    }

    public function parseURL() {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'] , '/');
            $url = filter_var($url , FILTER_SANITIZE_URL);
            $url = explode( '/' , $url );
            return $url;
        }
    } 
}