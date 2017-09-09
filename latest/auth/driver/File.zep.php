<?php

namespace Ice\Auth\Driver;

/**
 * File Auth driver.
 *
 * @package     Ice/Auth
 * @category    Driver
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class File extends \Ice\Auth\Driver implements \Ice\Auth\Driver\DriverInterface
{

    protected $users;


    /**
     * @param mixed $users
     */
    public function setUsers($users) {}

    /**
     * Gets the currently logged in user from the session. Returns NULL if no user is currently logged in.
     *
     * @param mixed $defaultValue Default value to return if the user is currently not logged in
     * @return mixed
     */
    public function getUser($defaultValue = null) {}

    /**
     * Check if user has the role.
     *
     * @param array $user User data
     * @param string $role Role name
     * @return bool
     */
    public function hasRole($user, $role = "login") {}

    /**
     * Logs a user in.
     *
     * @param string $username Username
     * @param string $password Password
     * @param boolean $remember Enable autologin (not supported)
     * @param boolean $force login without password
     * @return bool|null
     */
    public function login($username, $password, $remember = false, $force = false) {}

}
