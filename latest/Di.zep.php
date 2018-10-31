<?php

namespace Ice;

/**
 * Component that implements Dependency Injection and a container for the services.
 *
 * @package     Ice/Di
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Di extends \Ice\Arr
{

    static protected $di;


    protected $hooks = array();


    protected $defaults = array();


    /**
     * @param mixed $defaults
     */
    public function setDefaults($defaults) {}

    /**
     * Di constructor. Sets root path.
     *
     * @param array $data Array of services
     */
    public function __construct(array $data = array()) {}

    /**
     * Return the last DI created.
     *
     * @return Di
     */
    public static function fetch(): Di {}

    /**
     * Resolves the service based on its configuration.
     *
     * @param string $key Service name
     * @param mixed $parameters Definition
     */
    public function get(string $key, $parameters = null) {}

    /**
     * Registers a service in the services container.
     *
     * @param string $key Service name
     * @param mixed $value Definition
     */
    public function set(string $key, $value) {}

    /**
     * Get default services.
     *
     * @return array
     */
    public function getDefaults() {}

    /**
     * Resolve service.
     *
     * @param mixed $service Definition
     * @return object
     */
    public function resolve($service) {}

    /**
     * Build an instance of the given class.
     *
     * @param string $service
     * @param mixed $parameters
     * @return mixed
     */
    public function build($service, $parameters = array()) {}

    /**
     * If extra parameters are passed by numeric ID, rekey them by argument name.
     *
     * @param array $dependencies
     * @param array $parameters
     * @return array
     */
    protected function getParameters(array $dependencies, array $parameters) {}

    /**
     * Build up a list of dependencies for a given methods parameters.
     *
     * @param array $parameters
     * @param array $primitives
     * @return array
     */
    public function getDependencies(array $parameters, array $primitives = array()) {}

    /**
     * Determine what to do with a non-class value.
     *
     * @return mixed
     *
     * @throws Exception
     * @param ReflectionParameter $parameter
     */
    public function resolveNonClass(\ReflectionParameter $parameter) {}

    /**
     * Set handlers for error, exeception and shutdown.
     * Class should contain method handler, errorHandler and shutdownHandler.
     *
     * @param string $className
     * @return object
     */
    public function errors(string $className = 'Ice\\\\Exception') {}

    /**
     * Assign hook.
     *
     * @param string $name The hook name
     * @param mixed $callback
     * @param mixed $context The callback bind to the object
     * @param int $priority The hook priority; 0 = high, 10 = low
     * @param mixed $callable A callable object
     * @return object
     */
    public function hook(string $name, $callback, $context = null, int $priority = 10) {}

    /**
     * Invoke hook.
     *
     * @param string $name The hook name
     * @param array $args
     * @param mixed $context The callback bind to the object
     * @param mixed $hookArg Argument for hooked functions
     * @return object
     */
    public function applyHook(string $name, array $args = null, $context = null) {}

    /**
     * Get hook listeners.
     * Return an array of registered hooks. If `$name` is a valid hook name, only the listeners attached to that hook
     * are returned. Else, all listeners are returned as an associative array whose keys are hook names and whose values
     * are arrays of listeners.
     *
     * @param string $name A hook name (Optional)
     * @param mixed $context The callback bind to the object
     * @return array|null
     */
    public function getHooks(string $name = null, $context = null): ? {}

    /**
     * Clear hook listeners.
     * Clear all listeners for all hooks. If `$name` is a valid hook name, only the listeners attached to that hook
     * will be cleared.
     *
     * @param string $name A hook name (Optional)
     * @param mixed $context The callback bind to the object
     * @return object
     */
    public function clearHooks(string $name = null, $context = null) {}

    /**
     * Magic method to get or set services using setters/getters.
     *
     * @param string $method
     * @param mixed $arguments
     * @return mixed
     */
    public function __call(string $method, $arguments = null) {}

}
