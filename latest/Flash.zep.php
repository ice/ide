<?php

namespace Ice;

/**
 * Shows HTML notifications related to different circumstances.
 *
 * @package     Ice/Flash
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Flash
{

    protected $session;


    protected $tag;


    protected $options = array('session_key' => '_flash', 'success' => array('class' => 'alert alert-success'), 'info' => array('class' => 'alert alert-info'), 'warning' => array('class' => 'alert alert-warning'), 'danger' => array('class' => 'alert alert-danger'), 'html' => true);


    /**
     * @param mixed $options
     */
    public function setOptions($options) {}

    /**
     * Flash constructor. Fetch session and tag service from the di.
     *
     * @param array $options
     */
    public function __construct(array $options = array()) {}

    /**
     * Get option value with key.
     *
     * @param string $key The option key
     * @param mixed $defaultValue The value to return if option key does not exist
     * @return mixed
     */
    public function getOption(string $key, $defaultValue = null) {}

    /**
     * Display the messages.
     *
     * @param boolean $remove
     * @return string
     */
    public function getMessages(bool $remove = true): string {}

    /**
     * Get a message formatting it with HTML.
     *
     * @param string $type
     * @param mixed $messages
     * @param mixed $message
     * @return string
     */
    public function getMessage(string $type, $messages): string {}

    /**
     * Adds a message to the flash.
     *
     * @param string $type
     * @param string $message
     * @return object
     */
    public function message(string $type, string $message) {}

    /**
     * Add success message.
     *
     * @param string $message
     * @return object
     */
    public function success(string $message) {}

    /**
     * Alias of success message.
     *
     * @param string $message
     * @return object
     */
    public function ok(string $message) {}

    /**
     * Add info message.
     *
     * @param string $message
     * @return object
     */
    public function info(string $message) {}

    /**
     * Alias of info message.
     *
     * @param string $message
     * @return object
     */
    public function notice(string $message) {}

    /**
     * Add warning message.
     *
     * @param string $message
     * @return object
     */
    public function warning(string $message) {}

    /**
     * Alias of warning message.
     *
     * @param string $message
     * @return object
     */
    public function alert(string $message) {}

    /**
     * Add danger message.
     *
     * @param string $message
     * @return object
     */
    public function danger(string $message) {}

    /**
     * Alias of danger message.
     *
     * @param string $message
     * @return object
     */
    public function error(string $message) {}

}
