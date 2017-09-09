<?php

namespace Ice\Http\Request;

/**
 * Request interface.
 *
 * @package     Ice/Http
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
interface RequestInterface
{

    /**
     * @param string $name
     * @return bool
     */
    public function hasRequest($name);

    /**
     * @param string $name
     * @return bool
     */
    public function hasPost($name);

    /**
     * @param string $name
     * @return bool
     */
    public function hasGet($name);

    /**
     * @param string $name
     * @return bool
     */
    public function hasServer($name);

    /**
     * @return bool
     */
    public function isPost();

    /**
     * @return bool
     */
    public function isGet();

    /**
     * @return bool
     */
    public function isPut();

    /**
     * @return bool
     */
    public function isPatch();

    /**
     * @return bool
     */
    public function isHead();

    /**
     * @return bool
     */
    public function isDelete();

    /**
     * @return bool
     */
    public function isOptions();

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getUserAgent();

    /**
     * @return string
     */
    public function getHTTPReferer();

    /**
     * @param string $key
     * @param mixed $defaultValue
     */
    public function get($key, $defaultValue = null);

    /**
     * @param string $key
     * @param mixed $defaultValue
     */
    public function request($key, $defaultValue = null);

    /**
     * @param string $key
     * @param mixed $defaultValue
     */
    public function post($key, $defaultValue = null);

    /**
     * @param string $key
     * @param mixed $defaultValue
     */
    public function server($key, $defaultValue = null);

}
