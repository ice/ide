<?php

namespace Ice\Mvc\Route\Dispatcher;


class GroupCount extends \Ice\Mvc\Route\Dispatcher\Regex
{

    protected $staticRouteMap;


    protected $variableRouteData;


    /**
     * @param mixed $staticRouteMap
     */
    public function setStaticRouteMap($staticRouteMap) {}

    /**
     * @param mixed $variableRouteData
     */
    public function setVariableRouteData($variableRouteData) {}

    /**
     * @param array $data
     */
    public function __construct(array $data = array()) {}

    /**
     * @param mixed $routeData
     * @param mixed $uri
     */
    protected function dispatchVariableRoute($routeData, $uri) {}

}
