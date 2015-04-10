<?php

namespace Ice\Mvc;

class App extends \Ice\Di\Access
{

    protected $_autoRender = true;


    protected $_modules;



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
     * Handles a MVC request.
     *
     * @param string $method 
     * @param string $uri 
     * @return ResponseInterface|boolean 
     */
	public function handle($method = null, $uri = null) {}

}
