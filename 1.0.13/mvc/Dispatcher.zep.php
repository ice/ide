<?php

namespace Ice\Mvc;

class Dispatcher extends \Ice\Dispatcher
{

    protected $_method;


    protected $_handlerSuffix = "Controller";



    public function getMethod() {}

    /**
     * @param mixed $method 
     */
    public function setMethod($method) {}

    /**
     * Get active method, first check whether a method with the HTTP method as prefix exist.
     *
     * @return string 
     */
    public function getActiveMethod() {}

}
