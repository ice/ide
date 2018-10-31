<?php

namespace Ice\Config;

/**
 * Environment helper.
 *
 * @package     Ice/Config
 * @category    Configuration
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Env extends \Ice\Config\Ini
{

    /**
     * Env constructor.
     *
     * @param string $data Path to the env file
     */
    public function __construct($data = null) {}

    /**
     * Check whether environment has the key.
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool {}

    /**
     * Retrieve a single key from the environment.
     *
     * @param string $key
     * @param mixed $defaultValue
     * @param bool $required
     * @return mixed
     */
    public function get(string $key, $defaultValue = null, bool $required = false) {}

    /**
     * Assigns a value to the specified environment key.
     *
     * @param string $key
     * @param mixed $value
     * @return self
     */
    public function set(string $key, $value): self {}

    /**
     * Remove environment key.
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
