<?php

namespace Ice;

/**
 * Component that implements Dependency Injection and a container for the services.
 *
 * @package     Ice/Di
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Di extends \Ice\Arr
{

    static protected $di;


    protected $hooks = array();


    /**
     * Di constructor. Sets root path.
     *
     * @param array $data Array of services
     */
    public function __construct($data = array()) {}

    /**
     * Return the last DI created.
     *
     * @return Di 
     */
    public static function fetch() {}

    /**
     * Registers a service in the services container.
     *
     * @param string $key Service name
     * @param mixed $value Definition
     */
    public function set($key, $value) {}

    /**
     * Resolve service.
     *
     * @param mixed $service Definition
     * @return object 
     */
    public function resolve($service) {}

    /**
     * Set handlers for error, exeception and shutdown.
     * Class should contain method handler, errorHandler and shutdownHandler.
     *
     * @param string $className 
     * @return object 
     */
    public function errors($className = "Ice\\\\Exception") {}

    /**
     * Assign hook.
     *
     * @param string $name The hook name
     * @param mixed $callback 
     * @param int $priority The hook priority; 0 = high, 10 = low
     * @param mixed $callable A callable object
     */
    public function hook($name, $callback, $priority = 10) {}

    /**
     * Invoke hook.
     *
     * @param string $name The hook name
     * @param array $args 
     * @param mixed $hookArg Argument for hooked functions
     */
    public function applyHook($name, $args = null) {}

    /**
     * Get hook listeners.
     * Return an array of registered hooks. If `$name` is a valid hook name, only the listeners attached to that hook
     * are returned. Else, all listeners are returned as an associative array whose keys are hook names and whose values
     * are arrays of listeners.
     *
     * @param string $name A hook name (Optional)
     * @return array|null 
     */
    public function getHooks($name = null) {}

    /**
     * Clear hook listeners.
     * Clear all listeners for all hooks. If `$name` is a valid hook name, only the listeners attached to that hook
     * will be cleared.
     *
     * @param string $name 
     * @param string $$name A hook name (Optional)
     */
    public function clearHooks($name = null) {}

    /**
     * Magic method to get or set services using setters/getters.
     *
     * @param string $method 
     * @param mixed $arguments 
     * @return mixed 
     */
    public function __call($method, $arguments = null) {}


     function zephir_init_properties_Ice_Di() {}

}
