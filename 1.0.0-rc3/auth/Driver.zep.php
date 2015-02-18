<?php

namespace Ice\Auth;

abstract class Driver
{

    protected $_session;

    protected $_cookies;

    protected $_request;

    protected $_user;

    protected $_options = array(sha256, , auth_user, auth_user_roles, 1209600);

    /**
     * Loads services and configuration options.
     *
     * @param array $options Config options
     * @return void 
     */
	public function __construct($options = array()) {}

    /**
     * Checks a plain text password and its hash version to check if the password matches.
     *
     * @param string $password Password plain text
     * @param string $hash Hash version of password
     * @return boolean 
     */
	public function checkHash($password, $hash) {}

    /**
     * Complete the login for a user by setting session data and eg. incrementing the logins.
     *
     * @param mixed $user Complete the login for this user
     * @param array $roles User's roles
     * @return void 
     */
	protected function completeLogin($user, $roles = array()) {}

    /**
     * Get option value with key.
     *
     * @param string $key The option key
     * @param mixed $defaultValue The value to return if option key does not exist
     * @return mixed 
     */
	public function getOption($key, $defaultValue = null) {}

    /**
     * Gets the currently logged in user from the session. Returns NULL if no user is currently logged in.
     *
     * @param mixed $defaultValue Default value to return if the user is currently not logged in.
     * @return mixed 
     */
	public function getUser($defaultValue = null) {}

    /**
     * Perform a hmac hash, using the configured method.
     *
     * @param string $password String to hash
     * @return string 
     */
	public function hash($password) {}

    /**
     * Check if there is an active session. Optionally allows checking for a specific role.
     *
     * @param string $role Role name
     * @return mixed 
     */
	public function loggedIn($role = null) {}

    /**
     * Log out a user by removing the related session variables.
     *
     * @param boolean $destroy Completely destroy the session
     * @param boolean $logoutAll Remove all tokens for user
     * @return boolean 
     */
	public function logout($destroy = false, $logoutAll = false) {}

}
