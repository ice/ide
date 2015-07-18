<?php

namespace Ice\Mvc;

/**
 * This component allows to create URLs.
 *
 * @package     Ice/Mvc
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Url
{

    protected $baseUri = "/";


    protected $staticUri = "/";



    public function getBaseUri() {}

    /**
     * @param mixed $baseUri 
     */
    public function setBaseUri($baseUri) {}


    public function getStaticUri() {}

    /**
     * @param mixed $staticUri 
     */
    public function setStaticUri($staticUri) {}

    /**
     * Generates a URL for a static resource.
     *
     * @param string $uri 
     * @return string 
     */
    public function getStatic($uri = null) {}

    /**
     * Generates a URL.
     *
     * @param string $uri 
     * @param array|object $args Optional arguments to be appended to the query string
     * @param bool $local 
     * @return string 
     */
    public function get($uri = null, $args = null, $local = true) {}

}
