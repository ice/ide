<?php

namespace Ice\Auth;

/**
 * Simple implementation of authentication through popular social networks.
 *
 * @package     Ice/Auth
 * @category    Library
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Social
{

    protected $adapter;



    public function getAdapter() {}

    /**
     * Constructor.
     *
     * @param SocialInterface $adapter 
     */
    public function __construct(\Ice\Auth\Social\SocialInterface $adapter) {}

    /**
     * Call method authenticate() of adater class.
     *
     * @return boolean 
     */
    public function authenticate() {}

    /**
     * Retrieve a single key from an adapter.
     *
     * @param string $key The data key
     * @param mixed $defaultValue The value to return if data key does not exist
     * @return mixed 
     */
    public function get($key, $defaultValue = null) {}

    /**
     * Call method of this class or methods of adapter class.
     *
     * @param string $method 
     * @param mixed $arguments 
     * @return mixed 
     */
    public function __call($method, $arguments = null) {}

}
