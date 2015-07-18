<?php

namespace Ice;

/**
 * Database component.
 *
 * @package     Ice/Db
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Db
{

    protected $driver;



    public function getDriver() {}

    /**
     * Db constructor.
     *
     * @param DbInterface $driver Database driver
     */
    public function __construct(\Ice\Db\DbInterface $driver) {}

    /**
     * Magic call, call driver's method.
     *
     * @param string $method 
     * @param mixed $arguments 
     */
    public function __call($method, $arguments = null) {}

}
