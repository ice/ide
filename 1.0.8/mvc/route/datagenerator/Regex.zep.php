<?php

namespace Ice\Mvc\Route\DataGenerator;

abstract class Regex implements \Ice\Mvc\Route\DataGenerator\DataGeneratorInterface
{

    protected $_staticRoutes = array();


    protected $_methodToRegexToRoutesMap = array();



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


	public function __construct() {}

}
