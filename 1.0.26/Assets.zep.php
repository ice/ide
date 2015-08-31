<?php

namespace Ice;

/**
 * Assets helper is designed to management css/js resources.
 *
 * @package     Ice/Assets
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Assets
{

    const NEVER = 0;


    const NOT_EXIST = 1;


    const IF_CHANGE = 2;


    const ALWAYS = 3;


    protected $di;


    protected $css = array();


    protected $js = array();


    protected $options = array();



    public function getCss() {}


    public function getJs() {}

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
     * @param mixed $minify Local minify option
     * @return object 
     */
    public function add($parameters, $version = null, $minify = null) {}

    /**
     * Add CSS resource to assets.
     *
     * @param array $parameters Parameters of link/style
     * @param string $version Version appending to the uri
     * @param mixed $minify Local minify option
     * @return object 
     */
    public function addCss($parameters, $version = null, $minify = null) {}

    /**
     * Add JS resource to assets.
     *
     * @param array $parameters Parameters of script
     * @param string $version Version appending to the uri
     * @param mixed $minify Local minify option
     * @return object 
     */
    public function addJs($parameters, $version = null, $minify = null) {}

    /**
     * Minify content
     *
     * @param string $content Input text to minify
     * @param string $type Type of content
     * @return string 
     */
    protected function minify($content, $type) {}

    /**
     * Prepare resource
     *
     * @param string $uri The uri/url source path
     * @param string $type Type of content
     * @param int $minify Option of minify
     * @return string path to the source
     */
    protected function prepare($uri, $type, $minify) {}


     function zephir_init_properties_Ice_Assets() {}

}
