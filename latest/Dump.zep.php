<?php

namespace Ice;

/**
 * Dumps information about a variable(s)
 *
 * @package     Ice/Dump
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 * <pre><code>
 * $foo = 123;
 * echo (new \Ice\Dump())->variable($foo, "foo");
 * </code></pre>
 * <pre><code>
 * $foo = "string";
 * $bar = ["key" => "value"];
 * $baz = new stdClass();
 * echo (new \Ice\Dump())->vars($foo, $bar, $baz);
 * </code></pre>
 * Sleet usage:
 * <pre><code>
 * {{ dump('str', 1, 2.5, true, null, ['key': 'value']) }}
 * </code></pre>
 */
class Dump
{

    protected $detailed = false;


    protected $methods = array();


    protected $styles = array();



    public function getDetailed() {}

    /**
     * @param mixed $detailed 
     */
    public function setDetailed($detailed) {}

    /**
     * Dump constructor
     *
     * @param boolean $detailed debug object's private and protected properties
     * @param array $styles 
     */
    public function __construct($detailed = false, $styles = array()) {}

    /**
     * Alias of vars() method
     * <pre><code>
     * echo (new \Ice\Dump())->all($foo, $bar, $baz);
     * </code></pre>
     *
     * @param mixed $variable 
     * @param ...  
     * @return string 
     */
    public function all() {}

    /**
     * Get style for type
     *
     * @param string $type 
     * @return string 
     */
    protected function getStyle($type) {}

    /**
     * Set styles for vars type
     * Styles: pre, arr, bool, float, int, null, num, obj, other, res, str
     *
     * @param array $styles 
     * @return array 
     */
    public function setStyles($styles = array()) {}

    /**
     * Alias of variable() method
     * <pre><code>
     * echo (new \Ice\Dump())->one($foo, "foo");
     * </code></pre>
     *
     * @param mixed $variable 
     * @param string $name 
     * @return string 
     */
    public function one($variable, $name = null) {}

    /**
     * Prepare an HTML string of information about a single variable.
     *
     * @param mixed $variable 
     * @param string $name 
     * @param integer $tab 
     * @return string 
     */
    protected function output($variable, $name = null, $tab = 1) {}

    /**
     * Returns an HTML string of information about a single variable.
     * <pre><code>
     * $foo = 123;
     * echo (new \Ice\Dump())->variable($foo, "foo");
     * </code></pre>
     *
     * @param mixed $variable 
     * @param string $name 
     * @return string 
     */
    public function variable($variable, $name = null) {}

    /**
     * Returns an HTML string of debugging information about any number of
     * variables, each wrapped in a "pre" tag.
     * <pre><code>
     * $foo = "string";
     * $bar = ["key" => "value"];
     * $baz = new stdClass();
     * echo (new \Ice\Dump())->vars($foo, $bar, $baz);
     * </code></pre>
     *
     * @param mixed $variable 
     * @param ...  
     * @return string 
     */
    public function vars() {}

}
