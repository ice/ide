<?php

namespace Ice\Mvc;

/**
 * This component allows to create MVC applications.
 *
 * @package     Ice/Mvc
 * @category    Application
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
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
     * @param Di $di
     */
    public function __construct(\Ice\Di $di = null) {}

    /**
     * Handles a MVC request.
     *
     * @param string $method
     * @param string $uri
     * @return bool|\Ice\Http\Response\ResponseInterface
     */
    public function handle($method = null, $uri = null) {}

    /**
     * Add module with its dir path, initial class name and namespace
     *
     * @param string $name
     * @param array $options The keys can be [path|class|namespace]
     * @return object
     */
    public function addModule(string $name, array $options) {}

}
