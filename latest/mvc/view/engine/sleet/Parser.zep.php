<?php

namespace Ice\Mvc\View\Engine\Sleet;

/**
 * Sleet file parser.
 *
 * @package     Ice/View
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Parser
{

    const NORMAL = 0;


    const SHORTIF = 1;


    const INARRAY = 2;


    protected $functions = array("content" => "$this->getContent", "partial" => "$this->partial", "load" => "$this->load", "dump" => "$this->dump->vars", "version" => "Ice\\\\Version::get");


    protected $filters = array("capitalize" => "ucfirst");


    protected $env = array();


    /**
     * Sleet parser constructor. Fetch Ice\Tag methods.
     */
    public function __construct() {}

    /**
     * Parse text.
     *
     * @param string $text
     * @return string
     */
    public function text($text) {}

    /**
     * Parse one sleet expression.
     *
     * @param string $expression
     * @return string
     */
    public function parse($expression) {}

    /**
     * Parse control expression.
     *
     * @param string $control Control structure
     * @param array $expression Tokens
     * @return string
     */
    private function parseControl($control, $expression) {}

    /**
     * Parse echo expression.
     *
     * @param array $expression Tokens
     * @return string
     */
    private function parseEcho($expression) {}

    /**
     * Parse set expression.
     *
     * @param array $expression Tokens
     * @return string
     */
    private function parseSet($expression) {}

    /**
     * Parse use expression.
     *
     * @param array $expression Tokens
     * @return string
     */
    private function parseUse($expression) {}

    /**
     * Internal tokens parse.
     *
     * @param array $tokens
     * @return string
     */
    private function doParse($tokens) {}

    /**
     * Internal token parse.
     *
     * @param mixed $token
     * @param mixed $prev
     * @param mixed $next
     * @return mixed
     */
    private function token($token, $prev = null, $next = null) {}

}
