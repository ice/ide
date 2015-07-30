<?php

namespace Ice\Cli;

/**
 * This component allows to create CLI applications.
 *
 * @package     Ice/Cli
 * @category    Application
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Console extends \Ice\Di\Access
{

    const NORMAL = 0;


    const BOLD_BRIGHT = 1;


    const UNDERLINE = 4;


    const INVERSE = 7;


    protected $modules;



    public function getModules() {}

    /**
     * @param mixed $modules 
     */
    public function setModules($modules) {}

    /**
     * Handle an command-line request.
     *
     * @param array $arguments 
     * @return mixed 
     */
    public function handle($arguments = null) {}

    /**
     * Returns the given text with the correct color codes for a foreground and optionally a background color.
     * Colors: black, red, green, yellow, blue, magenta, cyan, lightgray, white
     *
     * @param string $text The text to color
     * @param string $color The foreground color
     * @param int $decoration Formatting type
     * @param string $bgColor The background color
     * @return string string
     */
    public static function color($text, $color = null, $decoration = 0, $bgColor = null) {}

}
