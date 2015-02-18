<?php

namespace Ice;

class Db
{

    protected $_driver;


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
