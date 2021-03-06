<?php

namespace Ice\Auth\Social;

/**
 * Auth social adapter.
 *
 * @package     Ice/Auth
 * @category    Adapter
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
abstract class Adapter implements \Ice\Auth\Social\SocialInterface
{

    const GET = 0;


    const POST = 1;


    protected $options;


    protected $accessToken;


    protected $clientId;


    protected $clientSecret;


    protected $redirectUri;


    protected $provider;


    protected $socialFieldsMap = array();


    protected $userInfo;


    protected $responseType = 'code';


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
    public function __call(string $name, $arguments = null) {}

    /**
     * Whether or not an data exists by key.
     *
     * @param string $key The data key
     * @return bool
     */
    public function has(string $key): bool {}

    /**
     * Retrieve a single key from an array.
     * If the key does not exist in the array, the default value will be returned.
     *
     * @param string $key The data key
     * @param mixed $defaultValue The value to return if data key does not exist
     * @return mixed
     */
    public function get(string $key, $defaultValue = null) {}

    /**
     * Get authentication url.
     *
     * @return string
     */
    public function getAuthUrl() {}

    /**
     * Get option value with key.
     *
     * @param string $key The option key
     * @param mixed $defaultValue The value to return if option key does not exist
     * @return mixed
     */
    public function getOption(string $key, $defaultValue = null) {}

    /**
     * Make curl get/post request and return result.
     *
     * @param int $method
     * @param string $url
     * @param array $params
     * @param boolean $parse
     * @return array|string
     */
    protected function call(int $method = self::GET, string $url, array $params, bool $parse = true) {}

}
