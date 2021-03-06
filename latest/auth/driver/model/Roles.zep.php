<?php

namespace Ice\Auth\Driver\Model;

/**
 * Model Roles.
 *
 * @package     Ice/Auth
 * @category    Model
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Roles extends \Ice\Mvc\Model
{
    /**
     * User class name.
     */
    protected $userClass = 'Ice\\\\Auth\\\\Driver\\\\Model\\\\Roles\\\\Users';


    /**
     * Initialize role's relations.
     *
     * @return void
     */
    public function initialize() {}

}
