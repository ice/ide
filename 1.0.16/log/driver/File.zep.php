<?php

namespace Ice\Log\Driver;

/**
 * File driver for the Logger.
 *
 * @package     Ice/Log
 * @category    Library
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class File extends \Ice\Log\Driver
{

    protected $file;


    /**
     * Logger file constructor.
     *
     * @throws Exception When logfile cannot be created or is not writeable
     * @param string $file Filename to log messages to (complete path)
     */
    public function __construct($file) {}

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level 
     * @param string $message 
     * @param array $context 
     * @return void 
     */
    public function log($level, $message, $context = array()) {}

    /**
     * Interpolates context values into the message placeholders.
     *
     * @param string $message 
     * @param array $context 
     * @return string 
     */
    protected function interpolate($message, $context = array()) {}

}
