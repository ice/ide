<?php

namespace Ice\Mvc;

/**
 * Router is the standard framework router. Routing is the process of taking a URI endpoint and decomposing it into
 * parameters to determine which module, controller, and action of that controller should receive the request.
 *
 * @package     Ice/Router
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * @uses        FastRoute http:/github.com/nikic/FastRoute
 */
class Router
{

    const NOT_FOUND = 0;


    const FOUND = 1;


    const METHOD_NOT_ALLOWED = 2;


    protected $defaultModule = "default";


    protected $defaultHandler = "index";


    protected $defaultAction = "index";


    protected $method;


    protected $module;


    protected $handler;


    protected $action;


    protected $params = array();


    protected $ready = false;


    protected $silent = false;


    protected $options = array();


    protected $routes;


    protected $collector;


    protected $dispatcher;



    public function getDefaultModule() {}

    /**
     * @param mixed $defaultModule 
     */
    public function setDefaultModule($defaultModule) {}


    public function getDefaultHandler() {}

    /**
     * @param mixed $defaultHandler 
     */
    public function setDefaultHandler($defaultHandler) {}


    public function getDefaultAction() {}

    /**
     * @param mixed $defaultAction 
     */
    public function setDefaultAction($defaultAction) {}


    public function getMethod() {}


    public function getModule() {}


    public function getHandler() {}


    public function getAction() {}


    public function getParams() {}

    /**
     * @param mixed $silent 
     */
    public function setSilent($silent) {}


    public function getOptions() {}


    public function getRoutes() {}

    /**
     * @param mixed $routes 
     */
    public function setRoutes($routes) {}


    public function getCollector() {}

    /**
     * @param mixed $collector 
     */
    public function setCollector($collector) {}


    public function getDispatcher() {}

    /**
     * @param mixed $dispatcher 
     */
    public function setDispatcher($dispatcher) {}

    /**
     * Set defaults values
     *
     * @param array $defaults 
     */
    public function setDefaults($defaults) {}

    /**
     * Set options.
     *
     * @param array $options 
     * @return object 
     */
    public function setOptions($options) {}

    /**
     * Prepare the FastRoute.
     */
    public function fastRoute() {}

    /**
     * Handles routing information received from the FastRoute engine.
     *
     * @param mixed $method 
     * @param string $uri 
     * @return mixed 
     */
    public function handle($method = null, $uri = null) {}

}
