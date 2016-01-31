<?php

namespace Ice;

/**
 * Cookie helper.
 *
 * @package     Ice/Cookies
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Cookies
{

    protected $di;


    protected $salt;


    protected $expiration = 0;


    protected $path = "/";


    protected $domain = null;


    protected $secure = false;


    protected $httpOnly = false;


    protected $encrypt = true;



    public function getSalt() {}

    /**
     * @param mixed $salt 
     */
    public function setSalt($salt) {}


    public function getExpiration() {}

    /**
     * @param mixed $expiration 
     */
    public function setExpiration($expiration) {}


    public function getPath() {}

    /**
     * @param mixed $path 
     */
    public function setPath($path) {}


    public function getDomain() {}

    /**
     * @param mixed $domain 
     */
    public function setDomain($domain) {}


    public function getSecure() {}

    /**
     * @param mixed $secure 
     */
    public function setSecure($secure) {}


    public function getHttpOnly() {}

    /**
     * @param mixed $httpOnly 
     */
    public function setHttpOnly($httpOnly) {}


    public function getEncrypt() {}

    /**
     * @param mixed $encrypt 
     */
    public function setEncrypt($encrypt) {}

    /**
     * @param string $salt 
     */
    public function __construct($salt = null) {}

    /**
     * Does cookie contain a key
     *
     * @param string $key The cookie key
     * @return boolean 
     */
    public function has($key) {}

    /**
     * Gets the value of a signed cookie.
     * Cookies without signatures will not be returned. If the cookie signature is present, but invalid, the cookie
     * will be deleted.
     *
     * @param string $key Cookie name
     * @param mixed $defaultValue Default value to return
     */
    public function get($key, $defaultValue = null) {}

    /**
     * Sets a signed cookie.
     * Note that all cookie values must be strings and no automatic serialization will be performed!
     *
     * @param string $key Name of cookie
     * @param string $value Value of cookie
     * @param integer $lifetime Expired time in seconds
     * @return boolean 
     */
    public function set($key, $value, $lifetime = 0) {}

    /**
     * Deletes a cookie by making the value NULL and expiring it.
     *
     * @param string $key cookie name
     * @return boolean 
     */
    public function remove($key) {}

    /**
     * Generates a salt string for a cookie based on the name and value.
     *
     * @throws Exception if salt is not configured
     * @param string $name Name of cookie
     * @param string $value Value of cookie
     * @return string 
     */
    public function salt($name, $value) {}

    /**
     * Proxy for the native setcookie function - to allow mocking in unit tests so that they do not fail when headers
     * have been sent.
     *
     * @see setcookie
     * @param string $name 
     * @param string $value 
     * @param integer $expire 
     * @param string $path 
     * @param string $domain 
     * @param boolean $secure 
     * @param boolean $httpOnly 
     * @return bool 
     */
    protected function setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly) {}

}
