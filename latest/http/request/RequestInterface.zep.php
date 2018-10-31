<?php

namespace Ice\Http\Request;

/**
 * Request interface.
 *
 * @package     Ice/Http
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
interface RequestInterface
{

    /**
     * @param string $name
     * @return bool
     */
    public function hasRequest(string $name): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasPost(string $name): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasGet(string $name): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasServer(string $name): bool;

    /**
     * @return bool
     */
    public function isPost(): bool;

    /**
     * @return bool
     */
    public function isGet(): bool;

    /**
     * @return bool
     */
    public function isPut(): bool;

    /**
     * @return bool
     */
    public function isPatch(): bool;

    /**
     * @return bool
     */
    public function isHead(): bool;

    /**
     * @return bool
     */
    public function isDelete(): bool;

    /**
     * @return bool
     */
    public function isOptions(): bool;

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return string
     */
    public function getUserAgent(): string;

    /**
     * @return string
     */
    public function getHTTPReferer(): string;

    /**
     * @param string $key
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $allowEmpty
     */
    public function getQuery(string $key = null, $filters = null, $defaultValue = null, bool $allowEmpty = false);

    /**
     * @param string $key
     * @param mixed $defaultValue
     */
    public function getFiles(string $key = null, $defaultValue = null);

    /**
     * @param string $key
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $allowEmpty
     */
    public function getPost(string $key = null, $filters = null, $defaultValue = null, bool $allowEmpty = false);

    /**
     * @param string $key
     * @param mixed $defaultValue
     */
    public function getServer(string $key = null, $defaultValue = null);

}
