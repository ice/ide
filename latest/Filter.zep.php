<?php

namespace Ice;

/**
 * Filter component provides a set of commonly needed data filters.
 *
 * @package     Ice/Filter
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Filter
{

    protected $filters;


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
    protected function doSanitize($value, $filter) {}

}
