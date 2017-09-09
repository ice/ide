<?php

namespace Ice;

/**
 * Assets helper is designed to management css/js resources.
 *
 * @package     Ice/Assets
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Assets
{

    const NEVER = 0;


    const NOT_EXIST = 1;


    const IF_CHANGE = 2;


    const ALWAYS = 3;


    protected $di;


    protected $collections = array();


    protected $options = array();


    /**
     * @param mixed $collections
     */
    public function setCollections($collections) {}


    public function getCollections() {}

    /**
     * @param mixed $options
     */
    public function setOptions($options) {}

    /**
     * Assets constructor. Fetch Di and set it as a property.
     */
    public function __construct() {}

    /**
     * Retrieve a single option.
     *
     * @param string $key The data key
     * @param mixed $defaultValue The value to return if data key does not exist
     * @return mixed
     */
    public function getOption($key, $defaultValue = null) {}

    /**
     * Add resource to assets, autodetect type.
     *
     * @param mixed $parameters Parameters of link/script/style
     * @param string $version Version appending to the uri
     * @param string $collection
     * @param mixed $minify Local minify option
     * @param string $Collection Collection name
     * @return object
     */
    public function add($parameters, $version = null, $collection = null, $minify = null) {}

    /**
     * Add CSS resource to assets.
     *
     * @param array $parameters Parameters of link/style
     * @param string $version Version appending to the uri
     * @param string $collection
     * @param mixed $minify Local minify option
     * @param string $Collection Collection name
     * @return object
     */
    public function addCss(array $parameters, $version = null, $collection = "css", $minify = null) {}

    /**
     * Add JS resource to assets.
     *
     * @param array $parameters Parameters of script
     * @param string $version Version appending to the uri
     * @param string $collection
     * @param mixed $minify Local minify option
     * @param string $Collection Collection name
     * @return object
     */
    public function addJs(array $parameters, $version = null, $collection = "js", $minify = null) {}

    /**
     * Add an asset to the collection.
     *
     * @param string $key Collection name
     * @param string $value Asset HTML code
     */
    public function addToCollection($key, $value) {}

    /**
     * Get the CSS default collection.
     *
     * @return array
     */
    public function getCss() {}

    /**
     * Get the JS default collection.
     *
     * @return array
     */
    public function getJs() {}

    /**
     * Get some collection.
     *
     * @param string $key Collection name
     * @return array
     */
    public function get($key) {}

    /**
     * Minify content.
     *
     * @param string $content Input text to minify
     * @param string $type Type of content
     * @return string
     */
    protected function minify($content, $type) {}

    /**
     * Prepare resource.
     *
     * @param string $uri The uri/url source path
     * @param string $type Type of content
     * @param int $minify Option of minify
     * @return string path to the source
     */
    protected function prepare($uri, $type, $minify) {}

}
