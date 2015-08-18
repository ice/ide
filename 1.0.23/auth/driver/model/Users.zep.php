<?php

namespace Ice\Auth\Driver\Model;

/**
 * Model Users.
 *
 * @package     Ice/Auth
 * @category    Model
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Users extends \Ice\Mvc\Model
{

    /**
     * Initialize user's relations.
     *
     * @return void 
     */
    public function initialize() {}

    /**
     * Complete the login for a user by incrementing the logins and saving login timestamp.
     *
     * @return object 
     */
    public function completeLogin() {}

    /**
     * Get user's role.
     *
     * @param string $name Role name to get
     * @return mixed 
     */
    public function getRole($name = "login") {}

}
