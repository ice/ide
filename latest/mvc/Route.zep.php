<?php

namespace Ice\Mvc;

/**
 * This class represents every route added to the router.
 *
 * @package     Ice/Router
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Route
{

    const REGEX_KEYWORD = '\\{([a-zA-Z0-9_]++)\\}';


    const REGEX_PLACEHOLDER = '[^/.,;?\\n]++';


    const REGEX_ESCAPE = '[.\\\\+*?^$=!|]';


    protected $routeUri = '';


    protected $regexMap = array();


    protected $routeRegex;


    protected $defaults = array('action' => 'index');


    protected $method;


    protected $error;



    public function getDefaults() {}

    /**
     * @param mixed $defaults
     */
    public function setDefaults($defaults) {}


    public function getMethod() {}


    public function getError() {}

    /**
     * Constructs a route. Each {key} will be translated to a regular expression
     * using a default regular expression pattern. You can override the default pattern
     * by providing a pattern for the key:
     *
     * <pre><code>
     *     // This route will only match when {id} is a digit
     *     new Route("/blog/{action}/{id}", ["id" => "\d+"], ['GET', 'POST']);
     *
     *     // This route will match when {path} is anything
     *     new Route("/{path}", ["path" => "."]);
     * </code></pre>
     *
     * It is also possible to create optional segments by using parentheses in
     * the URI definition:
     *
     * <pre><code>
     *     // This is the standard default route, and no keys are required
     *     new Route('/{module}[/{controller}[/{action}[/{id}[/params]]]]');
     *
     *     // This route only requires the {file} key
     *     new Route('[/{path}/]{file}[.{ext}]', ['path' => '.', 'ext' => '\w+']);
     * </code></pre>
     *
     * <pre><code>
     *     $route = new Route($uri, $regex, ['GET', 'POST']);
     * </code></pre>
     *
     * @param string $uri Route URI pattern
     * @param array $regexMap Key patterns map
     * @param mix $method Request method limitation, * for no limit or an array of methods
     */
    public function __construct(string $uri = null, array $regexMap = null, $method = '*') {}

    /**
     * Tests if the route matches a given URI and method.
     *
     * <pre><code>
     *     // Params: controller = blog, action = edit, id = 10
     *     $params = route->matches("/blog/edit/10");
     * </code></pre>
     *
     * @param string $uri
     * @param string $method
     * @param string $URI to match
     * @return array|false|null parameters, method not allowed or no match
     */
    public function matches(string $uri, string $method = '*') {}

    /**
     * Tests if the route allows a given method.
     *
     * @param string $method
     * @return boolean
     */
    public function checkMethod(string $method) {}

    /**
     * Generates a URI for the current route based on the parameters given. (AKA. reverse route)
     *
     * <pre><code>
     *     // Using the "default" route: /blog/post/10
     *     $uri = $route->uri(["controller" => "blog", "action" => "post", "id" => 10]);
     *     if (!$uri) echo $route->getError();
     * </code></pre>
     *
     * @param array $params
     * @param array $URI parameters
     * @return string|false
     */
    public function uri(array $params = null) {}

}
