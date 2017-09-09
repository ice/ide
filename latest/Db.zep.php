<?php

namespace Ice;

/**
 * Database component.
 *
 * @package     Ice/Db
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
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
     */
    public function __construct($driver, $host = null, $port = null, $name = null, $user = null, $password = null) {}

    /**
     * Magic call, call driver's method.
     *
     * @param string $method
     * @param mixed $arguments
     */
    public function __call($method, $arguments = null) {}

}
