<?php

namespace Ice\Http;

/**
 * Inspect the current HTTP request.
 *
 * @package     Ice/Http
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Request extends \Ice\Arr
{

    protected $files;


    protected $get;


    protected $post;


    protected $server;


    /**
     * Request constructor. Fetch data from globals variables: _REQUEST, _SERVER, _POST, _GET and _FILES.
     */
    public function __construct() {}

    /**
     * Check whether _REQUEST has index.
     *
     * @param string $name Index name
     * @return bool
     */
    public function hasRequest($name) {}

    /**
     * Check whether _POST has index.
     *
     * @param string $name Index name
     * @return bool
     */
    public function hasPost($name) {}

    /**
     * Check whether _GET has index.
     *
     * @param string $name Index name
     * @return bool
     */
    public function hasGet($name) {}

    /**
     * Check whether _SERVER has index.
     *
     * @param string $name Index name
     * @return bool
     */
    public function hasServer($name) {}

    /**
     * Check whether _FILES has index.
     *
     * @param string $name Index name
     * @return bool
     */
    public function hasFile($name) {}

    /**
     * Checks whether HTTP method is POST.
     *
     * @return bool
     */
    public function isPost() {}

    /**
     * Checks whether HTTP method is GET.
     *
     * @return bool
     */
    public function isGet() {}

    /**
     * Checks whether HTTP method is PUT.
     *
     * @return bool
     */
    public function isPut() {}

    /**
     * Checks whether HTTP method is PATCH.
     *
     * @return bool
     */
    public function isPatch() {}

    /**
     * Checks whether HTTP method is HEAD.
     *
     * @return bool
     */
    public function isHead() {}

    /**
     * Checks whether HTTP method is DELETE.
     *
     * @return bool
     */
    public function isDelete() {}

    /**
     * Checks whether HTTP method is OPTIONS.
     *
     * @return bool
     */
    public function isOptions() {}

    /**
     * Checks whether request has been made using AJAX.
     *
     * @return bool
     */
    public function isAjax() {}

    /**
     * Gets HTTP method which request has been made.
     *
     * @return string
     */
    public function getMethod() {}

    /**
     * Gets HTTP user agent used to made the request.
     *
     * @return string
     */
    public function getUserAgent() {}

    /**
     * Gets web page that refers active request.
     *
     * @return string
     */
    public function getHTTPReferer() {}

    /**
     * Gets most possible client IPv4 Address.
     *
     * @return string
     */
    public function getClientAddress() {}

    /**
     * Gets variable from _GET superglobal applying filters if needed.
     * If no parameters are given, return all.
     *
     * <pre><code>
     *  //Returns value from $_GET["id"] without sanitizing
     *  $id = $this->request->getQuery("id");
     *
     *  //Returns value from $_GET["title"] with sanitizing
     *  $title = $this->request->getQuery("title", "escape|repeats");
     *
     *  //Returns value from $_GET["id"] with a default value
     *  $id = $this->request->getQuery("id", null, 150);
     * </code></pre>
     *
     * @param string $key Index to get
     * @param string|array $filters Filters to apply
     * @param mixed $defaultValue Default value if key not exist or value is empty and allowEmpty is false
     * @param boolean $allowEmpty
     * @return mixed
     */
    public function getQuery($key = null, $filters = null, $defaultValue = null, $allowEmpty = false) {}

    /**
     * Gets variable from _POST superglobal applying filters if needed.
     * If no parameters are given, return all.
     *
     * <pre><code>
     *  //Returns value from $_POST["id"] without sanitizing
     *  $id = $this->request->getPost("id");
     *
     *  //Returns value from $_POST["title"] with sanitizing
     *  $title = $this->request->getPost("title", "escape|repeats");
     *
     *  //Returns value from $_POST["id"] with a default value
     *  $id = $this->request->getPost("id", null, 150);
     * </code></pre>
     *
     * @param string $key Index to get
     * @param string|array $filters Filters to apply
     * @param mixed $defaultValue Default value if key not exist or value is empty and allowEmpty is false
     * @param boolean $allowEmpty
     * @return mixed
     */
    public function getPost($key = null, $filters = null, $defaultValue = null, $allowEmpty = false) {}

    /**
     * Gets variable from _SERVER superglobal.
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getServer($key = null, $defaultValue = null) {}

    /**
     * Gets variable from _FILES superglobal.
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getFiles($key = null, $defaultValue = null) {}

}
