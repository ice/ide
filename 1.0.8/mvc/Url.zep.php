<?php

namespace Ice\Mvc;

class Url
{

    protected $_baseUri = "/";


    protected $_staticUri = "/";



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
