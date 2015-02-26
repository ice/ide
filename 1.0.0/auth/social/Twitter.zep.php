<?php

namespace Ice\Auth\Social;

class Twitter extends \Ice\Auth\Social\Adapter
{

    /**
     * Twitter adapter constructor.
     *
     * @param array $config 
     */
	public function __construct($config = array()) {}

    /**
     * Get user social id or null if it is not set.
     *
     * @return string|null 
     */
	public function getSocialPage() {}

    /**
     * Get url of user"s avatar or null if it is not set.
     *
     * @return string|null 
     */
	public function getImage() {}

    /**
     * Authenticate and return bool result of authentication.
     *
     * @return bool 
     */
	public function authenticate() {}

    /**
     * Prepare params for authentication url.
     *
     * @return array 
     */
	public function prepareAuthParams() {}

    /**
     * Prepare url-params with signature.
     *
     * @param string $url 
     * @param mixed $params 
     * @param string $oauthToken 
     * @param string $type 
     * @return array 
     */
	private function prepareUrlParams($url, $params = array(), $oauthToken = "", $type = "GET") {}

}
