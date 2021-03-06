<?php

namespace Ice;

/**
 * Database component.
 *
 * @package     Ice/Db
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Db
{

    protected $driver;



    public function getDriver() {}

    /**
     * @param mixed $driver
     */
    public function setDriver($driver) {}

    /**
     * Db constructor.
     *
     * @param mixed $driver
     * @param string $host
     * @param int $port
     * @param string $name
     * @param string $user
     * @param string $password
     * @param array $options
     */
    public function __construct($driver, string $host = null, int $port = null, string $name = null, string $user = null, string $password = null, array $options = array()) {}

    /**
     * Magic call, call driver's method.
     *
     * @param string $method
     * @param mixed $arguments
     */
    public function __call(string $method, $arguments = null) {}

}
