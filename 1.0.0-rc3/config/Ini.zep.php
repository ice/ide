<?php

namespace Ice\Config;

class Ini extends \Ice\Config
{

    /**
     * Config ini constructor.
     *
     * @param string $file Path to the ini file
     */
	public function __construct($file = null) {}

    /**
     * Return real type from a string, eg. "true" => true.
     *
     * @param string $value 
     * @return mixed 
     */
	public function cast($value) {}

    /**
     * Map the array recursively.
     *
     * @param object $callback Callback to apply
     * @param array $data Data to convert
     * @return array 
     */
	private function arrayMapRecursive($callback, $data) {}

}
