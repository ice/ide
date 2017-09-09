<?php

namespace Ice\Filter;

/**
 * Minify js string.
 *
 * @package     Ice/Filter
 * @category    Minification
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * @uses        jsmin.c www.crockford.com
 */
class Js
{

    const ORD_LF = 10;


    const ORD_SPACE = 32;


    const ACTION_KEEP_A = 1;


    const ACTION_DELETE_A = 2;


    const ACTION_DELETE_A_B = 3;


    protected $a = "";


    protected $b = "";


    protected $input = "";


    protected $inputIndex = 0;


    protected $inputLength = 0;


    protected $lookAhead = null;


    protected $output = "";



    public function getOutput() {}

    /**
     * Minify the js.
     *
     * @param string $js JS code to minify
     * @return string
     */
    public function sanitize($js) {}

    /**
     * Action -- do something! What to do is determined by the $command argument.
     *
     * action treats a string as a single character. Wow!
     * action recognizes a regular expression if it is preceded by ( or , or =.
     *
     * @throws Exception If parser errors are found:
     *         - Unterminated string literal
     *         - Unterminated regular expression set in regex literal
     *         - Unterminated regular expression literal
     *
     * @param int $command One of class constants:
     *      ACTION_KEEP_A      Output A. Copy B to A. Get the next B.
     *      ACTION_DELETE_A    Copy B to A. Get the next B. (Delete A).
     *      ACTION_DELETE_A_B  Get the next B. (Delete B).
     * @param int $command
     */
    protected function action($command) {}

    /**
     * Get next char. Convert ctrl char to space.
     *
     * @return string|null
     */
    protected function get() {}

    /**
     * Is $c a letter, digit, underscore, dollar sign, or non-ASCII character.
     *
     * @param mixed $c
     * @return bool
     */
    protected function isAlphaNum($c) {}

    /**
     * Perform minification, return result
     *
     * @return string
     */
    protected function min() {}

    /**
     * Get the next character, skipping over comments. peek() is used to see
     *  if a "/" is followed by a "/" or "".
     *
     * @throws Exception On unterminated comment.
     * @return string
     */
    protected function next() {}

    /**
     * Get next char. If is ctrl character, translate to a space or newline.
     *
     * @return string|null
     */
    protected function peek() {}

}
