<?php

namespace Ice\Mvc;

/**
 * Router is the standard framework router. Routing is the process of taking a URI endpoint and decomposing it into
 * parameters to determine which module, controller, and action of that controller should receive the request.
 *
 * @package     Ice/Router
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Router
{

    protected $routes = array();


    protected $route = 'default';


    protected $method;


    protected $module;


    protected $handler;


    protected $action;


    protected $params = array();


    protected $silent = false;


    protected $defaultModule = 'default';


    protected $defaultHandler = 'index';


    protected $defaultAction = 'index';



    public function getRoutes() {}


    public function getMethod() {}


    public function getModule() {}


    public function getHandler() {}


    public function getAction() {}


    public function getParams() {}


    public function getSilent() {}

    /**
     * @param mixed $silent
     */
    public function setSilent($silent) {}


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

    /**
     * Stores a named route and returns it.
     *
     * <pre><code>
     *     $router->addRoute("default", "[/{controller}[/{action}[/{id}]]]")
     *         ->setDefaults(["controller" => "hello"]);
     * </code></pre>
     *
     * @param string $name
     * @param string $uri
     * @param array $regex patterns for route keys
     * @param mix $method Request method limitation, * for no limit or an array of methods
     * @param string $route name
     * @param string $URI pattern
     * @return object
     */
    public function addRoute(string $name, string $uri, array $regex = null, $method = '*') {}

    /**
     * Retrieves a named route or the current matched route.
     *
     * <pre><code>
     *     $route = $router->getRoute("default");
     * </code></pre>
     *
     * @param string $name
     * @param string $route name
     * @return Route|null
     */
    public function getRoute(string $name = null) {}

    /**
     * Get the name of a route.
     *
     * @param Route $route
     * @param object $Route instance
     * @return string
     */
    public function getRouteName(Route $route) {}

    /**
     * Saves or loads the route cache.
     *
     * <pre><code>
     *     if (! $router->cache()) {
     *         // set routes
     *         $router->addRoute("default", "[/{controller}[/{action}[/{id}]]]");
     *         // cache routes
     *         $router->cache($filePath);
     *     }
     * </code></pre>
     *
     * @param string $file Cache the current routes to the file
     * @return self|boolean saving routes or loading routes
     */
    public function cache(string $file = null) {}

    /**
     * Set defaults values
     *
     * <pre><code>
     *     $route->defaults(["controller" => "hello", "action" => "world"]);
     * </code></pre>
     *
     * @param array $defaults values
     * @return self
     */
    public function defaults(array $defaults) {}

    /**
     * Set an array of route rules.
     * httpMethod:|null - no limit, GET, POST, PUT or PATCH
     * URI pattern: [] wrap for optional, {} wrap for regex placeholder key
     * regex: an associate array placeholder key and regex limitation pattern
     * defaults: default options for the module, handler and action
     *
     * <pre><code>
     *     // the rule format: ['name' => ["httpMethod", "URI pattern", "regex", "defaults"]]
     *     $route->setRoutes([
     *         ["default" => ["POST", "/{controller}[.ext]", ["controller" => "[a-z]+", "ext" => "(?:htm|html)"]]]
     *     ]);
     * </code></pre>
     *
     * @param array $routes Route rules
     * @return self
     */
    public function setRoutes(array $routes = null) {}

    /**
     * Handles routing information.
     *
     * @param string $method
     * @param string $uri
     * @return mixed
     */
    public function handle(string $method = null, string $uri = null) {}

    /**
     * Get route matched by uri and method.
     *
     * @param string $uri
     * @param string $method
     * @return Route|false|null
     */
    public function match(string $uri = null, string $method = null) {}

    /**
     * Generates a URI based on the parameters given. (AKA. reverse route).
     *
     * <pre><code>
     *     $uri = $router->uri(["controller" => "blog", "action" => "post", "param" => 10]);
     * </code></pre>
     *
     * @param array $params
     * @param string $method
     * @param array $URI parameters
     * @return string|null
     */
    public function uri(array $params, string $method = '*') {}

}
