<?php

namespace Ice;

class Session extends \Ice\Arr
{

    protected $_started = false;


    /**
     * Session constructor. Start the session.
     */
    public function __construct() {}

    /**
     * Start the session.
     *
     * @return boolean 
     */
    public function start() {}

    /**
     * Check whether the session was started.
     *
     * @return boolean 
     */
    public function isStarted() {}

    /**
     * Get session id.
     *
     * @return string 
     */
    public function getId() {}

    /**
     * Regenerate session id.
     *
     * @return boolean 
     */
    public function regenerate() {}

    /**
     * Destroy the session.
     *
     * @return boolean 
     */
    public function destroy() {}

    /**
     * Check whether session has the key.
     * No support for passing variables by reference yet zephir/issues/203
     *
     * @param string $key 
     * @return bool 
     */
    public function has($key) {}

    /**
     * Retrieve a single key from the session.
     *
     * @param string $key 
     * @param mixed $defaultValue 
     */
    public function get($key, $defaultValue = null) {}

    /**
     * Assigns a value to the specified session key.
     *
     * @param string $key 
     * @param mixed $value 
     */
    public function set($key, $value) {}

    /**
     * Remove session key.
     *
     * @param string $key 
     */
    public function remove($key) {}

}
