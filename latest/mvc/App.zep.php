<?php

namespace Ice\Mvc;

/**
 * This component allows to create MVC applications.
 *
 * @package     Ice/Mvc
 * @category    Application
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class App extends \Ice\Di\Access
{

    protected $autoRender = true;


    protected $modules;



    public function getAutoRender() {}

    /**
     * @param mixed $autoRender 
     */
    public function setAutoRender($autoRender) {}


    public function getModules() {}

    /**
     * @param mixed $modules 
     */
    public function setModules($modules) {}

    /**
     * App constructor
     *
     * @param mixed $di 
     * @param Di $$di 
     */
    public function __construct(\Ice\Di $di = null) {}

    /**
     * Handles a MVC request.
     *
     * @param string $method 
     * @param string $uri 
     * @return ResponseInterface|boolean 
     */
    public function handle($method = null, $uri = null) {}

}
