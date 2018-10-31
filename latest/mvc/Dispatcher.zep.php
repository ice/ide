<?php

namespace Ice\Mvc;

/**
 * Dispatching is the process of taking the request object, extracting the module name, controller name, action name,
 * and optional parameters contained in it, and then instantiating a controller and calling an action on it.
 *
 * @package     Ice/Dispatcher
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Dispatcher extends \Ice\Dispatcher
{

    const REDIRECT_CYCLIC = 5;


    protected $method;


    protected $handlers = 'Controllers';


    protected $handlerSuffix = 'Controller';



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
    public function getActiveMethod(): string {}


    public function dispatch() {}

}
