<?php

namespace Ice\Log;

interface LoggerInterface
{

    /**
     * @param string $message 
     * @param array $context 
     */
	public function emergency($message, $context = array());

    /**
     * @param string $message 
     * @param array $context 
     */
	public function alert($message, $context = array());

    /**
     * @param string $message 
     * @param array $context 
     */
	public function critical($message, $context = array());

    /**
     * @param string $message 
     * @param array $context 
     */
	public function error($message, $context = array());

    /**
     * @param string $message 
     * @param array $context 
     */
	public function warning($message, $context = array());

    /**
     * @param string $message 
     * @param array $context 
     */
	public function notice($message, $context = array());

    /**
     * @param string $message 
     * @param array $context 
     */
	public function info($message, $context = array());

    /**
     * @param string $message 
     * @param array $context 
     */
	public function debug($message, $context = array());

    /**
     * @param mixed $level 
     * @param string $message 
     * @param array $context 
     */
	public function log($level, $message, $context = array());

}
