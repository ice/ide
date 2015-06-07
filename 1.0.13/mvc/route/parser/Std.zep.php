<?php

namespace Ice\Mvc\Route\Parser;

class Std implements \Ice\Mvc\Route\Parser\ParserInterface
{

    const VARIABLE_REGEX = "~\\\\{ \\\\s* ([a-zA-Z][a-zA-Z0-9_]*) \\\\s* (?: : \\\\s* ([^{}]*(?:\\\\{(?-1)\\\\}[^{}]*)*) )? \\\\}~x";


    const DEFAULT_DISPATCH_REGEX = "[^/]+";


    /**
     * @param mixed $route 
     */
    public function parse($route) {}

}
