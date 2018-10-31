<?php

namespace Ice;

/**
 * Exception class.
 *
 * @package     Ice/Exception
 * @category    Error
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 */
class Exception extends Exception
{

    /**
     * Creates a new exception.
     * Translate exception's message using the [I18n] class.
     *
     * @param mixed $message Error message
     * @param mixed $code The exception code
     * @param Exception|Throwable $previous Previous exception
     */
    public function __construct($message = '', $code = 0, $previous = null) {}

    /**
     * Get the full trace as string.
     *
     * @param Exception|Throwable $e
     * @return string
     */
    public function getFullTraceAsString($e) {}

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
    public static function errorHandler(int $code, string $message, string $file = null, int $line = 0, array $context = array()) {}

    /**
     * Inline exception handler, displays the error message, source of the exception, and the stack trace of the error.
     *
     * @param Exception|Throwable $e
     * @return void
     */
    public static function handler($e) {}

    /**
     * Catches errors that are not caught by the error handler.
     * E_PARSE, E_ERROR, E_CORE_ERROR, E_USER_ERROR
     *
     * @return void
     */
    public static function shutdownHandler() {}

}
