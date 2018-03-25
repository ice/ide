<?php

namespace Ice\Cli;

/**
 * Router is the standard framework router. Routing is the process of taking a command-line arguments and decomposing it
 * into parameters to determine which module, task, and action of that task should receive the request.
 *
 * @package     Ice/Router
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Router
{

    protected $defaultModule = "shell";


    protected $defaultHandler = "main";


    protected $defaultAction = "main";


    protected $module;


    protected $handler;


    protected $action;


    protected $params = array();



    public function getDefaultModule() {}

    /**
     * @param mixed $defaultModule
     */
    public function setDefaultModule($defaultModule) {}


    public function getDefaultHandler() {}

    /**
     * @param mixed $defaultHandler
     */
    public function setDefaultHandler($defaultHandler) {}


    public function getDefaultAction() {}

    /**
     * @param mixed $defaultAction
     */
    public function setDefaultAction($defaultAction) {}


    public function getModule() {}


    public function getHandler() {}


    public function getAction() {}


    public function getParams() {}

    /**
     * Set defaults values
     *
     * @param array $defaults
     */
    public function setDefaults(array $defaults) {}

    /**
     * Handles routing information received from command-line arguments.
     *
     * <pre><code>
     *  php index.php --module=shell --handler=main --action=main --id=1 --param="some value"
     * </code></pre>
     *
     * @param array $arguments
     * @return array
     */
    public function handle($arguments = null) {}

}
