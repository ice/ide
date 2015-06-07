<?php

namespace Ice\Mvc\Route;

class Collector
{

    private $routeParser;


    private $dataGenerator;


    /**
     * @param mixed $routeParser 
     */
    public function setRouteParser($routeParser) {}

    /**
     * @param mixed $dataGenerator 
     */
    public function setDataGenerator($dataGenerator) {}

    /**
     * Constructs a route collector.
     *
     * @param mixed $routeParser 
     * @param mixed $dataGenerator 
     * @param RouteParser $$routeParser 
     * @param DataGenerator $$dataGenerator 
     */
    public function __construct(\Ice\Mvc\Route\Parser\ParserInterface $routeParser = null, \Ice\Mvc\Route\DataGenerator\DataGeneratorInterface $dataGenerator = null) {}

    /**
     * Adds a route to the collection.
     * The syntax used in the $route string depends on the used route parser.
     *
     * @param mixed $httpMethod 
     * @param string $route 
     * @param mixed $handler 
     * @param string|array $$httpMethod 
     * @param string $$route 
     * @param mixed $$handler 
     */
    public function addRoute($httpMethod, $route, $handler = null) {}

    /**
     * Returns the collected route data, as provided by the data generator.
     *
     * @return array 
     */
    public function getData() {}

}
