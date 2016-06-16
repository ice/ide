<?php

namespace Ice\Di;

/**
 * This class allows to access services in the services container by just only accessing a public property with the same
 * name of a registered service.
 *
 * @package     Ice/Di
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Access
{

    protected $di;


    /**
     * Magic get to easy retrieve service from the di.
     *
     * @param string $property 
     */
    public function __get($property) {}

    /**
     * @param string $property 
     * @param mixed $value 
     */
    public function __set($property, $value) {}

}
