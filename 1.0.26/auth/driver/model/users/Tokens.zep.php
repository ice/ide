<?php

namespace Ice\Auth\Driver\Model\Users;

/**
 * Model user's Tokens.
 *
 * @package     Ice/Auth
 * @category    Model
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Tokens extends \Ice\Mvc\Model
{

    protected $from = "user_tokens";


    /**
     * Initialize token's relations, remove expired tokens.
     *
     * @return void 
     */
    public function initialize() {}

    /**
     * Generate a new unique token and create the token.
     *
     * @param array $fields Fields to save or valid fields
     * @param object $extra Extra validation
     * @return mixed 
     */
    public function create($fields = array(), \Ice\Validation $extra = null) {}

    /**
     * Deletes all expired tokens.
     *
     * @return void 
     */
    public function deleteExpired() {}

    /**
     * Generate a new unique token and update the token.
     *
     * @param array $fields Fields to save or valid fields
     * @param object $extra Extra validation
     * @return mixed 
     */
    public function update($fields = array(), \Ice\Validation $extra = null) {}

    /**
     * Generate a new unique token.
     *
     * @uses Text::random()
     * @return string 
     */
    protected function generate() {}

}
