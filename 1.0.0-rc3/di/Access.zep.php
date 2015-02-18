<?php

namespace Ice\Di;

class Access
{

    protected $_di;

    /**
     * Access constructor. Fetch di if not specified.
     *
     * @param Di $di 
     */
	public function __construct(\Ice\Di $di = null) {}

    /**
     * Magic get to easy retrieve service from the di.
     *
     * @param string $property 
     */
	public function __get($property) {}

}
