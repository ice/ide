<?php

namespace Ice\Mvc\View\Engine;

class Sleet extends \Ice\Mvc\View\Engine
{

    protected $_compiler;



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
