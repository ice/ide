<?php

namespace Ice\Auth\Driver;

/**
 * Auth driver interface.
 *
 * @package     Ice/Auth
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
interface DriverInterface
{

    /**
     * @param mixed $defaultValue 
     */
    public function getUser($defaultValue = null);

    /**
     * @param mixed $user 
     * @param string $role 
     */
    public function hasRole($user, $role = "login");

    /**
     * @param mixed $username 
     * @param string $password 
     * @param bool $remember 
     */
    public function login($username, $password, $remember = false);

}
