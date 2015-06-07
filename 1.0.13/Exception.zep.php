<?php

namespace Ice;

class Exception extends \Exception
{

    /**
     * Creates a new exception.
     * Translate exception's message using the [I18n] class.
     *
     * @param mixed $message Error message
     * @param mixed $code The exception code
     * @param Exception $previous Previous exception
     */
    public function __construct($message = "", $code = 0, \Exception $previous = null) {}

    /**
     * Get the full trace as string.
     *
     * @param mixed $e 
     * @param Exception $$e 
     * @return string 
     */
    public function getFullTraceAsString(\Exception $e) {}

    /**
     * PHP error handler, converts all errors into ErrorExceptions. This handler respects error_reporting settings.
     *
     * @throws ErrorException
     * @param int $code 
     * @param string $message 
     * @param string $file 
     * @param int $line 
     * @param array $context 
     * @return true 
     */
    public static function errorHandler($code, $message, $file = null, $line = 0, $context = array()) {}

    /**
     * Inline exception handler, displays the error message, source of the exception, and the stack trace of the error.
     *
     * @param mixed $e 
     * @param Exception $$e 
     * @return void 
     */
    public static function handler(\Exception $e) {}

    /**
     * Catches errors that are not caught by the error handler, such as E_PARSE.
     *
     * @return void 
     */
    public static function shutdownHandler() {}

}
