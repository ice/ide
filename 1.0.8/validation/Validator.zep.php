<?php

namespace Ice\Validation;

abstract class Validator
{

    const ALL = 0;


    const NUMERIC = 1;


    const STRINGS = 2;


    protected $_options = array();


    /**
     * Validator constructor.
     *
     * @param array $options 
     */
	public function __construct($options = array()) {}

    /**
     * Validate the validator
     *
     * @param Validation $validation 
     * @param string $field 
     */
	public abstract function validate(\Ice\Validation $validation, $field);

    /**
     * Whether or not an option exists by key.
     *
     * @param string $key The option key
     * @return boolean 
     */
	public function has($key) {}

    /**
     * Retrieve a single option.
     *
     * @param string $key The data key
     * @param mixed $defaultValue The value to return if data key does not exist
     * @return mixed 
     */
	public function get($key, $defaultValue = null) {}

    /**
     * Assigns a value to the specified option.
     *
     * @param string $key The data key
     * @param mixed $value 
     * @return void 
     */
	public function set($key, $value) {}

    /**
     * Get options by type.
     *
     * @param int $keys Type of options
     * @param array $options 
     */
	public function getOptions($keys = self::ALL, $options = array()) {}

}
