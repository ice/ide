<?php

namespace Ice\Mvc\Route\Parser;

/**
 * Parses route strings of the following form:
 * "/user/{name}[/{id:[0-9]+}]"
 */
class Std implements \Ice\Mvc\Route\Parser\ParserInterface
{

    const VARIABLE_REGEX = "\\\\{ \\\\s* ([a-zA-Z_][a-zA-Z0-9_-]*) \\\\s* (?: : \\\\s* ([^{}]*(?:\\\\{(?-1)\\\\}[^{}]*)*) )? \\\\}";


    const DEFAULT_DISPATCH_REGEX = "[^/]+";


    /**
     * @param mixed $route 
     */
    public function parse($route) {}

    /**
     * Parses a route string that does not contain optional segments.
     *
     * @param mixed $route 
     */
    private function parsePlaceholders($route) {}

}
