<?php

namespace Ice\Auth\Social;

abstract class Adapter implements \Ice\Auth\Social\SocialInterface
{

    const GET = 0;


    const POST = 1;


    protected $_accessToken;


    protected $_clientId;


    protected $_clientSecret;


    protected $_redirectUri;


    protected $_provider;


    protected $_socialFieldsMap = array();


    protected $_userInfo;


    protected $_responseType = "code";


    /**
     * @param mixed $accessToken 
     */
	public function setAccessToken($accessToken) {}


	public function getAccessToken() {}


	public function getProvider() {}


	public function getResponseType() {}

    /**
     * Adapter constructor.
     *
     * @throws Exception
     * @param array $config 
     */
	public function __construct($config = array()) {}

    /**
     * Magic method to get user's info.
     *
     * @param string $name 
     * @param mixed $arguments 
     * @param string $method 
     * @return mixed 
     */
	public function __call($name, $arguments = null) {}

    /**
     * Whether or not an data exists by key.
     *
     * @param string $key The data key
     * @return boolean 
     */
	public function has($key) {}

    /**
     * Retrieve a single key from an array.
     * If the key does not exist in the array, the default value will be returned.
     *
     * @param string $key The data key
     * @param mixed $defaultValue The value to return if data key does not exist
     * @return mixed 
     */
	public function get($key, $defaultValue = null) {}

    /**
     * Get authentication url.
     *
     * @return string 
     */
	public function getAuthUrl() {}

    /**
     * Make curl get/post request and return result.
     *
     * @param int $method 
     * @param string $url 
     * @param array $params 
     * @param boolean $parse 
     * @return array|string 
     */
	protected function call($method = self::GET, $url, $params, $parse = true) {}

}
