<?php

namespace Ice\Auth\Driver\Model;

/**
 * Model Users.
 *
 * @package     Ice/Auth
 * @category    Model
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Users extends \Ice\Mvc\Model
{
    /**
     * Role class name must extend from Ice\Auth\Driver\Model\Roles
     */
    protected $roleClass = 'Ice\\\\Auth\\\\Driver\\\\Model\\\\Roles';

    /**
     * Token class name must extend from Ice\Auth\Driver\Model\Users\Tokens
     */
    protected $tokenClass = 'Ice\\\\Auth\\\\Driver\\\\Model\\\\Users\\\\Tokens';

    /**
     * User class name must extend from Ice\Auth\Driver\Model\Roles\Users
     */
    protected $userClass = 'Ice\\\\Auth\\\\Driver\\\\Model\\\\Roles\\\\Users';

    /**
     * Social class name must extend from Ice\Auth\Driver\Model\Users\Social
     */
    protected $socialClass = 'Ice\\\\Auth\\\\Driver\\\\Model\\\\Users\\\\Social';


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
    public function getRole(string $name = 'login') {}

}
