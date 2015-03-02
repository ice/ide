<?php

namespace Ice\Mvc;

class Router
{

    const NOT_FOUND = 0;

    const FOUND = 1;

    const METHOD_NOT_ALLOWED = 2;

    protected $_di;

    protected $_defaultModule = "default";

    protected $_defaultHandler = "index";

    protected $_defaultAction = "index";

    protected $_method;

    protected $_module;

    protected $_handler;

    protected $_action;

    protected $_params = array();

    protected $_ready = false;

    protected $_silent = false;

    protected $_options;

    protected $_routes;

    protected $_collector;

    protected $_dispatcher;


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

    /**
     * @param mixed $options 
     */
	public function setOptions($options) {}


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
     * Router constructor. Fetch Di and set it as a property.
     */
	public function __construct() {}

    /**
     * Set defaults values
     *
     * @param array $defaults 
     */
	public function setDefaults($defaults) {}

    /**
     * Prepare the FastRoute.
     *
     * @param object $routeDefinitionCallback 
     * @param array $options 
     */
	public function fastRoute($routeDefinitionCallback = null, $options = array()) {}

    /**
     * Handles routing information received from the FastRoute engine.
     *
     * @param mixed $method 
     * @param string $uri 
     * @return mixed 
     */
	public function handle($method = null, $uri = null) {}

}
