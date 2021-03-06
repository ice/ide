<?php

namespace Ice\Mvc\View\Engine\Sleet;

/**
 * Sleet file parser.
 *
 * @package     Ice/View
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Parser
{

    const NORMAL = 0;


    const SHORTIF = 1;


    const INARRAY = 2;


    protected $functions = array('content' => '$this->getContent', 'partial' => '$this->partial', 'load' => '$this->load', 'dump' => '$this->dump->vars', 'version' => 'Ice\\\\Version::get');


    protected $filters = array('capitalize' => 'ucfirst');


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
    public function text(string $text): string {}

    /**
     * Parse one sleet expression.
     *
     * @param string $expression
     * @return string
     */
    public function parse(string $expression): string {}

    /**
     * Parse control expression.
     *
     * @param string $control Control structure
     * @param array $expression Tokens
     * @return string
     */
    private function parseControl($control, $expression): string {}

    /**
     * Parse echo expression.
     *
     * @param array $expression Tokens
     * @return string
     */
    private function parseEcho($expression): string {}

    /**
     * Parse set expression.
     *
     * @param array $expression Tokens
     * @return string
     */
    private function parseSet($expression): string {}

    /**
     * Parse use expression.
     *
     * @param array $expression Tokens
     * @return string
     */
    private function parseUse($expression): string {}

    /**
     * Internal tokens parse.
     *
     * @param array $tokens
     * @return string
     */
    private function doParse($tokens): string {}

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
