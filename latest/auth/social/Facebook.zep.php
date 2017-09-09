<?php

namespace Ice\Auth\Social;

/**
 * Facebook Auth social adapter.
 *
 * @package     Ice/Auth
 * @category    Adapter
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Facebook extends \Ice\Auth\Social\Adapter
{

    /**
     * Facebook adapter constructor.
     *
     * @param array $config
     */
    public function __construct($config = array()) {}

    /**
     * Get url of user's avatar or null if it is not set.
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

}
