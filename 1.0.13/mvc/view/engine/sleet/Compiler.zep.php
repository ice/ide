<?php

namespace Ice\Mvc\View\Engine\Sleet;

class Compiler
{

    const NEVER = 0;


    const NOT_EXIST = 1;


    const IF_CHANGE = 2;


    const ALWAYS = 3;


    protected $_view;


    protected $_content;


    protected $_parsed;


    protected $_parser;



    public function getParser() {}

    /**
     * Sleet compiler constructor. Set the view and parser.
     *
     * @param mixed $view 
     */
    public function __construct($view = null) {}

    /**
     * Compile the file.
     *
     * @param string $path 
     * @return string content
     */
    public function compile($path) {}

    /**
     * Magic toString to get parsed content.
     */
    public function __toString() {}

}
