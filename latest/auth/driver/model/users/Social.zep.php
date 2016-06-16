<?php

namespace Ice\Auth\Driver\Model\Users;

/**
 * Model user's social auth.
 *
 * @package     Ice/Auth
 * @category    Model
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Social extends \Ice\Mvc\Model
{

    protected $from = "user_social";


    /**
     * Initialize relations.
     *
     * @return void 
     */
    public function initialize() {}

    /**
     * Set PRIMARY key.
     *
     * @return void 
     */
    public function onConstruct() {}

}
