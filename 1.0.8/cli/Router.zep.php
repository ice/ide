<?php

namespace Ice\Cli;

class Router
{

    protected $_defaultModule = "shell";


    protected $_defaultHandler = "main";


    protected $_defaultAction = "main";


    protected $_module;


    protected $_handler;


    protected $_action;


    protected $_params = array();



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
	public function setDefaults($defaults) {}

    /**
     * Handles routing information received from command-line arguments.
     * <pre><code>
     * php index.php --module=shell --handler=main --action=main --id=1 --param="some value"
     * </code></pre>
     *
     * @param array $arguments 
     * @return array 
     */
	public function handle($arguments = null) {}


	public function __construct() {}

}
