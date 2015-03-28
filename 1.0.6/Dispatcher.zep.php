<?php

namespace Ice;

abstract class Dispatcher
{

    const DISPATCH_CYCLIC = 1;

    const HANDLER_NOT_FOUND = 2;

    const ACTION_NOT_FOUND = 3;

    const INVALID_PARAMS = 4;

    protected $_di;

    protected $_defaultNamespace;

    protected $_activeHandler;

    protected $_lastHandler;

    protected $_finished;

    protected $_forwarded = false;

    protected $_silent = false;

    protected $_modules = array();

    protected $_module;

    protected $_namespace;

    protected $_handler;

    protected $_action;

    protected $_params = array();

    protected $_returnedValue;

    protected $_handlerSuffix = "Handler";

    protected $_actionSuffix = "Action";

    protected $_previousModule;

    protected $_previousHandler;

    protected $_previousAction;


	public function getDefaultNamespace() {}

    /**
     * @param mixed $defaultNamespace 
     */
	public function setDefaultNamespace($defaultNamespace) {}


	public function getActiveHandler() {}


	public function getLastHandler() {}


	public function getFinished() {}


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
     * Set a param by its name or numeric index.
     *
     * @param mixed $param 
     * @param mixed $value 
     */
	public function setParam($param, $value) {}

    /**
     * Gets a param by its name or numeric index.
     *
     * @param mixed $param 
     * @param mixed $defaultValue 
     * @return mixed 
     */
	public function getParam($param, $defaultValue = null) {}

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
     */
	public function forward($forward) {}

}
