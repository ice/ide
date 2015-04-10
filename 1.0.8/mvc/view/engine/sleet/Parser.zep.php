<?php

namespace Ice\Mvc\View\Engine\Sleet;

class Parser
{

    const NORMAL = 0;


    const SHORTIF = 1;


    const INARRAY = 2;


    protected $_functions = array("content" => "$this->getContent", "partial" => "$this->partial", "load" => "$this->load", "dump" => "$this->dump->vars", "version" => "Ice\\\\Version::get");


    protected $_filters = array("capitalize" => "ucfirst");


    protected $_env = array();


    /**
     * Sleet parser constructor. Fetch Ice\Tag methods.
     */
	public function __construct() {}

    /**
     * Parse text, line by line.
     *
     * @param string $text 
     * @return string text
     */
	public function text($text) {}

    /**
     * Parse one line - detect the expressions.
     *
     * @param string $line 
     * @param int $no Line number
     * @return string line
     */
	public function line($line, $no = 1) {}

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
	private function _parse($tokens) {}

    /**
     * Internal token parse.
     *
     * @param mixed $token 
     * @param mixed $prev 
     * @param mixed $next 
     * @return mixed 
     */
	private function _token($token, $prev = null, $next = null) {}

}
