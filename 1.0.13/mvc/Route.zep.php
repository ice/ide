<?php

namespace Ice\Mvc;

class Route
{

    protected $httpMethod;


    protected $regex;


    protected $variables;


    protected $handler;


    /**
     * Constructs a route (value object).
     *
     * @param string $httpMethod 
     * @param mixed $handler 
     * @param string $regex 
     * @param array $variables 
     */
    public function __construct($httpMethod, $handler, $regex, $variables) {}

    /**
     * Tests whether this route matches the given string.
     *
     * @param string $str 
     * @return bool 
     */
    public function matches($str) {}

}
