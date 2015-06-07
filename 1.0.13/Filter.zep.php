<?php

namespace Ice;

class Filter
{

    protected $_filters;


    /**
     * Adds a user-defined filter.
     *
     * @param string $name 
     * @param callable $body 
     */
    public function add($name, $body) {}

    /**
     * Sanitizes a value with a specified single or set of filters.
     *
     * @param mixed $value 
     * @param mixed $filters 
     * @return mixed 
     */
    public function sanitize($value, $filters) {}

    /**
     * Internal sanitize.
     *
     * @param mixed $value 
     * @param string $filter 
     * @return mixed 
     */
    protected function _sanitize($value, $filter) {}

}
