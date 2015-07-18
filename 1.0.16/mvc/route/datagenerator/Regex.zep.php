<?php

namespace Ice\Mvc\Route\DataGenerator;


abstract class Regex implements \Ice\Mvc\Route\DataGenerator\DataGeneratorInterface
{

    protected $staticRoutes = array();


    protected $methodToRegexToRoutesMap = array();



    protected abstract function getApproxChunkSize();

    /**
     * @param mixed $regexToRoutesMap 
     */
    protected abstract function processChunk($regexToRoutesMap);

    /**
     * @param mixed $httpMethod 
     * @param mixed $routeData 
     * @param mixed $handler 
     */
    public function addRoute($httpMethod, $routeData, $handler) {}


    public function getData() {}


    protected function generateVariableRouteData() {}

    /**
     * @param mixed $count 
     */
    protected function computeChunkSize($count) {}

    /**
     * @param mixed $routeData 
     */
    protected function isStaticRoute($routeData) {}

    /**
     * @param mixed $httpMethod 
     * @param mixed $routeData 
     * @param mixed $handler 
     */
    protected function addStaticRoute($httpMethod, $routeData, $handler) {}

    /**
     * @param mixed $httpMethod 
     * @param mixed $routeData 
     * @param mixed $handler 
     */
    protected function addVariableRoute($httpMethod, $routeData, $handler) {}

    /**
     * @param mixed $routeData 
     */
    protected function buildRegexForRoute($routeData) {}


     function zephir_init_properties_Ice_Mvc_Route_DataGenerator_Regex() {}

}
