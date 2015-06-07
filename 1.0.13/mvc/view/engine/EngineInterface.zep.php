<?php

namespace Ice\Mvc\View\Engine;

interface EngineInterface
{

    /**
     * @param mixed $view 
     * @param mixed $di 
     */
    public function __construct(\Ice\Mvc\View\ViewInterface $view, \Ice\Di $di = null);

    /**
     * @param string $path 
     * @param array $data 
     */
    public function render($path, $data = array());

}
