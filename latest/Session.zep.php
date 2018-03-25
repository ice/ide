<?php

namespace Ice;

/**
 * Session helper.
 *
 * @package     Ice/Session
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Session extends \Ice\Arr
{

    protected $started = false;


    /**
     * Session constructor. Start the session.
     */
    public function __construct() {}

    /**
     * Start the session.
     *
     * @return bool
     */
    public function start() {}

    /**
     * Check whether the session was started.
     *
     * @return bool
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
     * @return bool
     */
    public function regenerate() {}

    /**
     * Destroy the session.
     *
     * @return bool
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
     * @param bool $required
     */
    public function get($key, $defaultValue = null, $required = false) {}

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
