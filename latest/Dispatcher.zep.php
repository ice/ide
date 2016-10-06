<?php

namespace Ice;

/**
 * The base class for Ice\Mvc\Dispatcher and Ice\CLI\Dispatcher.
 * For the response from router and in the specified module, create instance of handler with action and params.
 *
 * @package     Ice/Dispatcher
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
abstract class Dispatcher
{

    const DISPATCH_CYCLIC = 1;


    const HANDLER_NOT_FOUND = 2;


    const ACTION_NOT_FOUND = 3;


    const INVALID_PARAMS = 4;


    protected $di;


    protected $defaultNamespace;


    protected $activeHandler;


    protected $lastHandler;


    protected $loops = 16;


    protected $finished;


    protected $forwards = 0;


    protected $forwarded = false;


    protected $silent = false;


    protected $modules = array();


    protected $module = null;


    protected $namespace = null;


    protected $handler = null;


    protected $action = null;


    protected $params = array();


    protected $returnedValue = null;


    protected $handlerSuffix = "Handler";


    protected $actionSuffix = "Action";


    protected $previousModule = null;


    protected $previousHandler = null;


    protected $previousAction = null;



    public function getDefaultNamespace() {}

    /**
     * @param mixed $defaultNamespace 
     */
    public function setDefaultNamespace($defaultNamespace) {}


    public function getActiveHandler() {}


    public function getLastHandler() {}


    public function getLoops() {}

    /**
     * @param mixed $loops 
     */
    public function setLoops($loops) {}


    public function getFinished() {}


    public function getForwards() {}


    public function getForwarded() {}

    /**
     * @param mixed $silent 
     */
    public function setSilent($silent) {}


    public function getModules() {}

    /**
     * @param mixed $modules 
     */
    public function setModules($modules) {}


    public function getModule() {}

    /**
     * @param mixed $module 
     */
    public function setModule($module) {}


    public function getNamespace() {}

    /**
     * @param mixed $namespace 
     */
    public function setNamespace($namespace) {}


    public function getHandler() {}

    /**
     * @param mixed $handler 
     */
    public function setHandler($handler) {}


    public function getAction() {}

    /**
     * @param mixed $action 
     */
    public function setAction($action) {}


    public function getParams() {}

    /**
     * @param mixed $params 
     */
    public function setParams($params) {}


    public function getReturnedValue() {}

    /**
     * @param mixed $returnedValue 
     */
    public function setReturnedValue($returnedValue) {}


    public function getHandlerSuffix() {}

    /**
     * @param mixed $handlerSuffix 
     */
    public function setHandlerSuffix($handlerSuffix) {}


    public function getActionSuffix() {}

    /**
     * @param mixed $actionSuffix 
     */
    public function setActionSuffix($actionSuffix) {}

    /**
     * Di constructor. Fetch Di and set it as a property.
     */
    public function __construct() {}

    /**
     * Whether or not an param exists by key.
     *
     * @param string $key The param key
     * @return boolean 
     */
    public function hasParam($key) {}

    /**
     * Set a param by its name or numeric index.
     *
     * @param mixed $param 
     * @param mixed $value 
     */
    public function setParam($param, $value) {}

    /**
     * Gets variable from params attribute applying filters if needed.
     * If no parameters are given, return all.
     * <pre><code>
     * //Returns value from $params["id"] without sanitizing
     * $id = $this->router->getParam("id");
     * //Returns value from $params["title"] with sanitizing
     * $title = $this->router->getParam("title", "escape|repeats");
     * //Returns value from $params["id"] with a default value
     * $id = $this->router->getParam("id", null, 150);
     * </code></pre>
     *
     * @param string $key Index to get
     * @param string|array $filters Filters to apply
     * @param mixed $defaultValue Default value if key not exist or value is empty and allowEmpty is false
     * @param boolean $allowEmpty 
     * @return mixed 
     */
    public function getParam($key = null, $filters = null, $defaultValue = null, $allowEmpty = false) {}

    /**
     * Returns the current method to be/executed in the dispatcher.
     *
     * @return string 
     */
    public function getActiveMethod() {}

    /**
     * Dispatches a handle action taking into account the routing parameters.
     *
     * @return object 
     */
    public function dispatch() {}

    /**
     * Forwards the execution flow to another module/controller/action.
     *
     * @param array $forward 
     * @param boolean $force 
     */
    public function forward(array $forward, $force = false) {}

}
