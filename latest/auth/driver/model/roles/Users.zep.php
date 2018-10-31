<?php

namespace Ice\Auth\Driver\Model\Roles;

/**
 * Model user's Roles.
 *
 * @package     Ice/Auth
 * @category    Model
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Users extends \Ice\Mvc\Model
{

    protected $from = 'roles_users';

    /**
     * User class name.
     */
    protected $userClass = 'Ice\\\\Auth\\\\Driver\\\\Model\\\\Users';

    /**
     * Role class name.
     */
    protected $roleClass = 'Ice\\\\Auth\\\\Driver\\\\Model\\\\Roles';


    /**
     * Initialize roles-users relations.
     *
     * @return void
     */
    public function initialize() {}

}
