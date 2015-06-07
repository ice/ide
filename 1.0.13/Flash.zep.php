<?php

namespace Ice;

class Flash
{

    protected $_session;


    protected $_tag;


    protected $_options = array("session_key" => "_flash", "success" => array("class" => "alert alert-success"), "info" => array("class" => "alert alert-info"), "warning" => array("class" => "alert alert-warning"), "danger" => array("class" => "alert alert-danger"), "html" => true);


    /**
     * Flash constructor. Fetch session and tag service from the di.
     *
     * @param array $options 
     */
    public function __construct($options = array()) {}

    /**
     * Get option value with key.
     *
     * @param string $key The option key
     * @param mixed $defaultValue The value to return if option key does not exist
     * @return mixed 
     */
    public function getOption($key, $defaultValue = null) {}

    /**
     * Display the messages.
     *
     * @param boolean $remove 
     * @return string 
     */
    public function getMessages($remove = true) {}

    /**
     * Get a message formatting it with HTML.
     *
     * @param string $type 
     * @param mixed $messages 
     * @param mixed $message 
     * @return string 
     */
    public function getMessage($type, $messages) {}

    /**
     * Adds a message to the flash.
     *
     * @param string $type 
     * @param string $message 
     * @return void 
     */
    public function message($type, $message) {}

    /**
     * Add success message.
     *
     * @param string $message 
     * @return void 
     */
    public function success($message) {}

    /**
     * Alias of success message.
     *
     * @param string $message 
     */
    public function ok($message) {}

    /**
     * Add info message.
     *
     * @param string $message 
     * @return void 
     */
    public function info($message) {}

    /**
     * Alias of info message.
     *
     * @param string $message 
     */
    public function notice($message) {}

    /**
     * Add warning message.
     *
     * @param string $message 
     * @return void 
     */
    public function warning($message) {}

    /**
     * Alias of warning message.
     *
     * @param string $message 
     */
    public function alert($message) {}

    /**
     * Add danger message.
     *
     * @param string $message 
     * @return void 
     */
    public function danger($message) {}

    /**
     * Alias of danger message.
     *
     * @param string $message 
     */
    public function error($message) {}

}
