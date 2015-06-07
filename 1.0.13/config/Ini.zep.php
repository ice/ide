<?php

namespace Ice\Config;

class Ini extends \Ice\Config
{

    /**
     * Config ini constructor.
     *
     * @param mixed $data 
     * @param string $file Path to the ini file
     */
    public function __construct($data = null) {}

    /**
     * We have to cast values manually because parse_ini_file() has a poor implementation.
     *
     * @param mixed $ini The array casted by `parse_ini_file`
     * @param mixed $raw The same array but with raw strings
     * @return mixed 
     */
    private function cast($ini, $raw) {}

    /**
     * Map the array recursively.
     *
     * @param array $ini 
     * @param array $raw 
     * @return array 
     */
    private function map($ini, $raw) {}

}
