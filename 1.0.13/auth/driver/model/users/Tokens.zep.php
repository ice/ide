<?php

namespace Ice\Auth\Driver\Model\Users;

class Tokens extends \Ice\Mvc\Model
{

    protected $_from = "user_tokens";


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
    protected function _generate() {}

}
