<?php

namespace Ice\Auth\Driver;

class Model extends \Ice\Auth\Driver implements \Ice\Auth\Driver\DriverInterface
{

    /**
     * Logs a user in, based on the autologin cookie.
     *
     * @return mixed 
     */
	public function autoLogin() {}

    /**
     * Complete the login for a user by setting session data and eg. incrementing the logins.
     *
     * @param object $user User Model object
     * @param array $roles User's roles
     * @return void 
     */
	protected function completeLogin($user, $roles = array()) {}

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
     * @param object $user User Model object
     * @param string $role Role name
     * @return boolean 
     */
	public function hasRole(\Ice\Auth\Driver\Model\Users $user, $role = "login") {}

    /**
     * Logs a user in.
     *
     * @param mixed $username 
     * @param string $password 
     * @param boolean $remember enable autologin
     * @return boolean 
     */
	public function login($username, $password, $remember = false) {}

    /**
     * Log a user out and remove any autologin cookies.
     *
     * @param boolean $destroy Completely destroy the session
     * @param boolean $logoutAll Remove all tokens for user
     * @return boolean 
     */
	public function logout($destroy = false, $logoutAll = false) {}

    /**
     * Refresh user data stored in the session.
     * Returns null if no user is currently logged in.
     *
     * @return mixed 
     */
	public function refreshUser() {}

}