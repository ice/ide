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
    public function start(): bool {}

    /**
     * Check whether the session was started.
     *
     * @param boolean $autoStart If session is not started, try to start it
     * @return bool
     */
    public function isStarted(bool $autoStart = true): bool {}

    /**
     * Get session id.
     *
     * @return string
     */
    public function getId(): string {}

    /**
     * Regenerate session id.
     *
     * @return bool
     */
    public function regenerate(): bool {}

    /**
     * Destroy the session.
     *
     * @return bool
     */
    public function destroy(): bool {}

    /**
     * Check whether session has the key.
     * No support for passing variables by reference yet zephir/issues/203
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool {}

    /**
     * Retrieve a single key from the session.
     *
     * @param string $key
     * @param mixed $defaultValue
     * @param bool $required
     * @return mixed
     */
    public function get(string $key, $defaultValue = null, bool $required = false) {}

    /**
     * Assigns a value to the specified session key.
     *
     * @param string $key
     * @param mixed $value
     * @return self
     */
    public function set(string $key, $value): self {}

    /**
     * Remove session key.
     *
     * @param string $key
     * @return self
     */
    public function remove(string $key): self {}

    /**
     * Fetch all data.
     *
     * @return array
     */
    public function getData() {}

}
