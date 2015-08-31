<?php

namespace Ice\Mvc\View\Engine;

/**
 * Sleet template engine. Syntax is similar to Twig, Volt or Django.
 *
 * @package     Ice/View
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Sleet extends \Ice\Mvc\View\Engine
{

    protected $compiler;



    public function getCompiler() {}

    /**
     * Compile the .sleet file.
     *
     * @param string $path Path to the file
     * @return string to the compiled file
     */
    public function compile($path) {}

    /**
     * Render the Slet file. Compile first.
     *
     * @param string $path 
     * @param array $data 
     * @return string 
     */
    public function render($path, $data = array()) {}

}
