<?php

namespace Ice\Mvc\Route\Parser;

interface ParserInterface
{

    /**
     * Returns an array of the following form:
     * [
     * "/fixedRoutePart/",
     * ["varName", "[^/]+"],
     * "/moreFixed/",
     * ["varName2", [0-9]+"],
     * ]
     *
     * @param mixed $route 
     * @param string $$route Route to parse
     * @return array route data
     */
    public function parse($route);

}
